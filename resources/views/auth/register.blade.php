@extends('layouts.master')

@section('content')

    <div class="container">
        <p>Already have an account? <a href='/login'>Login here...</a></p>

    </div>
    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Register</h1>
                <form method='POST' action='/register'>
                    {!! csrf_field() !!}

                    <div class='form-group'>
                        <label for='name'>Name</label>
                        <br>
                        <input type='text' name='name' id='name' value='{{ old('name') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='email'>Email</label>
                        <br>
                        <input type='text' name='email' id='email' value='{{ old('email') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='password'>Password</label>
                        <br>
                        <input type='password' name='password' id='password'>
                    </div>

                    <div class='form-group'>
                        <label for='password_confirmation'>Confirm Password</label>
                        <br>
                        <input type='password' name='password_confirmation' id='password_confirmation'>
                    </div>

                    <button type='submit' class='btn btn-primary'>Register</button>
                </form>
            </div>
            <div class="col-md-8 col-md-pull-1">
                <img src="/pongo-1.jpg" class="img-responsive" alt="Pongo">
            </div>
        </div>
    </div>
@stop
