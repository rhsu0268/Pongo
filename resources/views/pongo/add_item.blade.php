@extends('layouts.master')

{{-- define a section called title

 --}}
@section('title')
    Add Item
@stop

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <!--<link href="/css/loremTool.css" type='text/css' rel='stylesheet'>-->
@stop


@section('content')
 	<div class="container">
        <div class="content">
            <form>
              <div class="form-group">
                <label for="Item">Item</label>
                <input type="text" class="form-control" id="item" placeholder="Item">
              </div>
              <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" placeholder="Category">
              </div>
              <div class="form-group">
                <label for="category">Price</label>
                <input type="text" class="form-control" id="category" placeholder="Price">
              </div>
              <div class="form-group">
               <label for="description">Comment:</label>
               <textarea class="form-control" rows="5" id="description">Enter description for your item...</textarea>
             </div>

              <button type="submit" class="btn btn-default">Add Item</button>
            </form>

        </div>
    </div>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/loremTool.js"></script>
@stop