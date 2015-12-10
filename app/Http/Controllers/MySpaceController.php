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

class MySpaceController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to
    */
    public function getPage() {

        // get all the items added by the user
        $addedItems = \App\AddedItem::where('user_id', '=', \Auth::id())->get();
        //dump($addedItems);

        $addedItemsArray = $addedItems->toArray();

        // get all the transactions of the user
        //$transactions = \App\Transaction::with('public_item')->get();
        //$transactions = \App\Transaction::where('user_id', '=', \Auth::id())->get();
        //dump($transactions);
        $item = \App\Transaction::first();
        //dump($item);
        $test = $item->public_item;
        dump($test);



        //$transactions = \App\Transaction::where('user_id', '=', \Auth::id())->get();
        //dump($transactions);

        /*
        foreach($transactions as $transaction)
        {
            $item = $transaction->public_item;
            dump($item);
        }
        */
        /*
        foreach ($transactions as $transaction)
        {
            //dump($transaction->toArray());
            //echo $transaction->
        }
        */
        return view('pongo.myspace')->with('addedItems', $addedItemsArray);
    }

    public function postPage(Request $request)
    {
    }


}
