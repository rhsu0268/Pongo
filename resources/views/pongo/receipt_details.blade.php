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
    <button type="button" class="btn btn-warning" id="back" style="float: right;">Back</button>
    <div class="content">
        <h1>Sales Receipt</h1>
        <table class="table table-bordered">
            <tr>
                <td>Item</td>
                <td>Category</td>
                <td>One Line Description</td>
                <td>Price</td>
            </tr>
            <tr>
                <td>{{$item->item}}</td>
                <td>{{$item->category}}</td>
                <td>{{$item->one_line_description}}</td>
                <td>${{$item->price}}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Tax</td>
                <td>${{$transactionBuy->tax}}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>Total</td>
                <td>${{$transactionBuy->total}}</td>
            </tr>
        </table>

        <br><br>
    </div>
</div>

@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/details.js"></script>
@stop
