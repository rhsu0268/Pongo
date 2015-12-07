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
            <h1>Items For Sale</h1>

            <table class="table table-striped">
                <tr>
                    <td>Item</td>
                    <td>Category</td>
                    <td>One Line Description</td>
                    <td>Price</td>
                    <td>Options</td>
                </tr>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item['item'] }}</td>
                        <td>{{ $item['category'] }}</td>
                        <td>{{ $item['one_line_description'] }}</td>
                        <td>${{ $item['price'] }}</td>
                        <td><button type="button" class="btn btn-info" id="{{ $item['id'] }}" onClick="itemClicked(this.id)">More Info</button></td>
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
    <script src="/js/browse.js"></script>
@stop
