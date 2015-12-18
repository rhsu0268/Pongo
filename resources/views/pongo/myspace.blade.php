@extends('layouts.master')

{{-- define a section called title

 --}}
@section('title')
    myspace
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
        <h1>My Added Items</h1>
        @if (sizeof($addedItems) == 0)
            <b>You have not added any items. Why not add one?</b>
        @endif
        <br>
        <table class="table table-striped table-hover">
            <tr>
                <td>Item</td>
                <td>Category</td>
                <td>One Line Description</td>
                <td>Price</td>
                <td>Options</td>
            </tr>
            @foreach($addedItems as $item)
            <tr>
                <td>{{ $item['item'] }}</td>
                <td>{{ $item['category'] }}</td>
                <td>{{ $item['one_line_description'] }}</td>
                <td>${{ $item['price'] }}</td>
                <td>
                    <button type="button" class="btn btn-info" id="{{ $item['id'] }}" onClick="itemClicked(this.id)">
                        More Info
                    </button>
                    @if ( !$item['make_public'] )
                    <button type="button" class="btn btn-success" id="{{ $item['id'] }}" onClick="makePublic(this.id)">
                        Make Public
                    </button>
                    @endif
                    <button type="button" class="btn btn-danger" id="{{ $item['id'] }}" onClick="deleteItem(this.id)">
                        Delete Item
                    </button>
                </td>
            </tr>
            @endforeach
        </table>
        <h1>My Transactions</h1>
        @if (sizeof($transactions) == 0)
            <b>You have not made any transactions. Why not buy an item?</b>
        @endif
        <table class="table table-striped table-hover">
            <tr>
                <td>Transaction Date</td>
                <td>Transaction Type</td>
                <td>Item</td>
                <td>Category</td>
                <td>Price</td>
                <td>Options</td>
            </tr>
            @foreach($transactions as $transaction)
            <tr>
                <td>{{  $transaction['transaction_date'] }}</td>
                <td>{{$transaction['transaction_type']}}</td>
                <td>{{$transaction['item']}}</td>
                <td>{{$transaction['category']}}</td>
                <td>${{$transaction['price']}}</td>
                <td>
                    <button type="button" class="btn btn-info" id="{{ $transaction['id'] }}" onClick="transactionClicked(this.id)">
                        More Info
                    </button>
                </td>
            </tr>
            @endforeach
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
    <script src="/js/myspace.js"></script>
@stop
