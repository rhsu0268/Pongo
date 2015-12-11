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

        // add the transaction to the transactions table

        $item = \App\PublicItem::where('id', '=', $id)->find($id);
        dump($item);
        $transaction = new \App\Transaction();
    



        //dump($itemObject);

        return view('pongo.receipt_details');
    }

    public function postPage(Request $request)
    {
    }


}
