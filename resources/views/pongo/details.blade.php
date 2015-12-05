@extends('layouts.master')

{{-- define a section called title

 --}}
@section('title')
    Browse Items
@stop

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
    <link href="/browse_items.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
 	<div class="container">
        <div class="content">
            <h1>Item Description</h1>

            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Item</h3>
              </div>
              <div class="panel-body">
                Water Bottle
              </div>
            </div>

            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Category</h3>
              </div>
              <div class="panel-body">
                Daily Life
              </div>
            </div>

            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">One Line Description</h3>
              </div>
              <div class="panel-body">
                A Brand New Water Bottle 9 Ounces
              </div>
            </div>

            <div class="panel panel-warning">
              <div class="panel-heading">
                <h3 class="panel-title">Price</h3>
              </div>
              <div class="panel-body">
                $3.99
              </div>
            </div>

            <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">Details</h3>
              </div>
              <div class="panel-body">
                This is a very good bottle.
              </div>
            </div>




        </div>
    </div>

@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/browse.js"></script>
@stop
