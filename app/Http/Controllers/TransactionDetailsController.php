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

class TransactionDetailsController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to
    */
    public function getPage($id = null) {

        // get the transaction
        $transaction = \App\Transaction::where('id', '=', $id)->first();
        //dump($transaction);

        $transactionArray = $transaction->public_item->toArray();
        //dump($transactionArray);
        $transactionArray["transaction_type"] = $transaction->transaction_type;
        $transactionArray["transaction_date"] = $transaction->created_at;
        $transactionArray["tax"] = $transaction->tax;
        $transactionArray["total"] = $transaction->total;
        //dump($transactionArray);

        $transactionObject = (object)$transactionArray;
        //$addedItemsArray = $addedItems->toArray();

        return view('pongo.transaction_details')->with('transaction', $transactionObject);
    }

    public function postPage(Request $request)
    {
    }


}
