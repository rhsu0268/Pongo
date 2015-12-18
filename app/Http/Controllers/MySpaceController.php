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

        $transactions = \App\Transaction::where('user_id', '=', \Auth::id())->get();

        //dump($transactions);

        $transactionArrays = array();


        foreach ($transactions as $transaction)
        {
            $transactionArray = $transaction->public_item->toArray();
            //dump($transactionArray);
            $transactionArray["transaction_type"] = $transaction->transaction_type;
            $transactionArray["transaction_date"] = $transaction->created_at->timezone('America/New_York')->format('m/d/Y h:i A');


            array_push($transactionArrays, $transactionArray);
        }

        //dump($transactionArrays);
        return view('pongo.myspace')->with([
            'addedItems' => $addedItemsArray,
            'transactions' => $transactionArrays]);
    }

    public function postPage(Request $request)
    {
    }


}
