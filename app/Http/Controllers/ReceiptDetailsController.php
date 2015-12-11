<?php

// namespace: All controller need to set namespace
// need to use global controllers
// if we use the App namespace, go into app folder
// prevents us from name conflicts - knows that it is defined within the namespace
// set namespace for BookController
namespace App\Http\Controllers;

// use it for a particular class that we are extending
use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator as LoremGenerator;
use Illuminate\Http\Request;

class ReceiptDetailsController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to
    */
    public function getPage($id = null) {

        // update the public_items table and mark the item as bought
        $item = \App\PublicItem::where('id', '=', $id)->find($id);
        //dump($item->toArray());

        // make sure the item isn't one that is posted by the user
        $user_id = $item['user_id'];

        if ($user_id == \Auth::id())
        {
            \Session::flash('flash_message', 'You cannot purchase an item that you posted!');

            // fetch the items from the public_items table
            $items = \App\PublicItem::where('bought', '=', 0)->get();

            //dump($items->toArray());

            $itemsArray = $items->toArray();

            return view('pongo.browse_items')->with('items', $itemsArray);
        }

        $item->bought = TRUE;
        $item->save();

        // add the transaction to the transactions table
        $transaction = new \App\Transaction();
        $transaction->transaction_type = "BUY";
        $transaction->public_item_id = $id;
        $transaction->user_id = \Auth::id();
        $transaction->save();

        $itemAsArray = $item->toArray();
        $itemObject = (object)$itemAsArray;
        //dump($itemObject);

        \Session::flash('flash_message', 'You successfully purchased the item!');

        return view('pongo.receipt_details')->with('item', $itemObject);
    }

    public function postPage(Request $request)
    {
    }


}
