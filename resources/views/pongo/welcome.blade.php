@extends('layouts.master')

@section('title')
    Pongo
@stop

@section('content')


    <link href="/master.css" type='text/css' rel='stylesheet'>

    <div class="container">
        <h1>Welcome to Pongo!</h1>
        <div class="row">
            <div class="col-md-7">
                <img src="/pongo.jpg" class="img-responsive" alt="Pongo" height="450" width="670">
            </div>
            <div class="col-md-5">
                <h3>
                    With the end of the semester approaching, are you cleaning out your dorms and getting ready
                    for winter break?
                </h3>

                <h3>
                    Are there textbooks or just left over school supplies that you want to get rid of?
                </h3>

                <h3>
                    Have no fear, Pongo is the very application on which you can post your items, buy other ones
                    from your friends, and ultimately, clean out your dorms while making a little
                    bit of money.
                </h3>
            </div>
        </div>
    </div>
@stop
