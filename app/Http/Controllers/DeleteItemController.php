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

class DeleteItemController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to
    */
    public function getPage($id = null) {

        // find the item to delete
        $item = \App\AddedItem::find($id);
        //dump($item);
        $item->delete();

        //dump($item->make_public);

        // if it was made public, delete it from the public_items table
        /*
        if ($item->make_public)
        {
            $publicItem = \App\PublicItem::where('one_line_description', '=', $item->one_line_description)->get();
            //dump($publicItem[0]);
            $publicItem[0]->delete();
        }
        */

        \Session::flash('flash_message',$item->item.' was deleted.');
        return redirect('/myspace');
    }

    public function postPage(Request $request)
    {
    }


}
