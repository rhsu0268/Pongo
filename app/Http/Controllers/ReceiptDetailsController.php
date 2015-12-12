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

        $price = null;
        // make sure the item isn't one that is posted by the user
        $user_id = $item['user_id'];

        if ($user_id == \Auth::id())
        {
            \Session::flash('flash_message', 'You cannot purchase an item that you posted!');

            // fetch the items from the public_items table
            $items = \App\PublicItem::where('bought', '=', 0)->get();

            //dump($items->toArray());

            $itemsArray = $items->toArray();
            //dump($itemArray->toArray());
            // calculate the tax and total
            return view('pongo.browse_items')->with('items', $itemsArray);
        }

        $price = $item['price'];
        //echo $price;
        $tax = round($price * 0.10, 2);
        //echo $tax;
        $total = $price + $tax;
        //echo $total;

        // update the item as bought
        $item->bought = TRUE;
        $item->save();

        // update the transaction table for the user who buys the product
        $transactionBuy = new \App\Transaction();
        $transactionBuy->transaction_type = "BUY";
        $transactionBuy->public_item_id = $id;
        $transactionBuy->user_id = \Auth::id();
        $transactionBuy->tax = $tax;
        $transactionBuy->total= $total;
        $transactionBuy->save();

        dump($transactionBuy->toArray());
        $transactionBuyObject = (object)$transactionBuy->toArray();

        $itemAsArray = $item->toArray();
        $itemObject = (object)$itemAsArray;

        // send an email to the user who made the purchase
        \Mail::send(['html' => 'pongo.sales_receipt_email'], array('item' => $itemObject, 'transactionBuy' => $transactionBuyObject), function($message)
        {
            $message->to(\Auth::user()->email, \Auth::user()->name)->subject('You made a puchase on Pongo!');
        });


        // update the transaction table for user who sold the product
        $transactionSell = new \App\Transaction();
        $transactionSell->transaction_type = "SELL";
        $transactionSell->public_item_id = $id;
        $transactionSell->user_id = $user_id;
        $transactionSell->tax = $tax;
        $transactionSell->total= $total;
        $transactionSell->save();





        \Session::flash('flash_message', 'You successfully purchased the item!');

        return view('pongo.receipt_details')->with(
            ['item' => $itemObject,
             'transactionBuy' => $transactionBuyObject
            ]);
    }

    public function postPage(Request $request)
    {
    }


}
