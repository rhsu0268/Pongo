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
    <!--<link href="/css/loremTool.css" type='text/css' rel='stylesheet'>-->
@stop


@section('content')
 	<div class="container">
        <div class="content">
            <h1>Items For Sale</h1>

            <table class="table table-striped">
                <tr>
                    <td>Item</td>
                    <td>Category</td>
                    <td>One Line Description</td>
                    <td>Price</td>
                    <td>Options</td>
                </tr>
                <tr>
                    <td>Water Bottle</td>
                    <td>Daily Life</td>
                    <td>A Brand New Water Bottle 9 Ounces</td>
                    <td>$3.99</td>
                    <td></td>
                </tr>
            </table>

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
