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

class AddItemController extends Controller {

    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
    * Responds to requests to
    */
    public function getPage() {

        return view('pongo.add_item');
    }

    public function postPage(Request $request)
    {
        // validation
        $this->validate(
        $request,
        [
            'item' => 'required',
            'category' => 'required',
            'one_line_description' => 'required|max:50',
            'price' => 'required',
            'detailed_description' => 'required|min:20'
        ]
    );

        // code here to enter into the add_item table
        $item = new \App\AddedItem();
        $item->item = $request->item;
        $item->user_id = \Auth::id();
        $item->category = $request->category;
        $item->one_line_description =$request->oneLineDescription;
        $item->price =$request->price;
        $item->detailed_description =$request->description;
        $item->save();

        \Session::flash('flash_message', 'Your item was added!');

        return redirect('/myspace');
    }


}
