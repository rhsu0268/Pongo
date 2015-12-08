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

class BrowseItemsController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to
    */
    public function getPage($id = null) {

        if ($id != null)
        {

            // find the item in the added_items table
            $item = \App\AddedItem::where('id', '=', $id)->find($id);
            $itemAsArray = $item->toArray();
            // update the added_items table
            if ($itemAsArray)
            {
                $item->make_public = TRUE;

                // save changes
                $item->save();
            }

            // add the item to the public_items table

            $publicItem = new \App\PublicItem();
            $publicItem->item = $itemAsArray['item'];
            $publicItem->category = $itemAsArray['category'];
            $publicItem->one_line_description = $itemAsArray['one_line_description'];
            $publicItem->price = $itemAsArray['price'];
            $publicItem->detailed_description = $itemAsArray['detailed_description'];
            $publicItem->save();

        }

        // fetch the items from the public_items table
        $items = \App\PublicItem::all();

        //dump($items->toArray());

        $itemsArray = $items->toArray();

        //dump($itemsArray);

        return view('pongo.browse_items')->with('items', $itemsArray);
    }

    public function postPage(Request $request)
    {
    }


}
