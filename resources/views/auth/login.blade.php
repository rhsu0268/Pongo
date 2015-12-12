@extends('layouts.master')

@section('content')

    <div class="container">
        <p>Don't have an account? <a href='/register'>Register here...</a></p>
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
                <h1>Login</h1>
                <form method='POST' action='/login'>
                    {!! csrf_field() !!}
                    <div class='form-group'>
                        <label for='email'>Email</label>
                        <br>
                        <input type='text' name='email' id='email' value='{{ old('email') }}'>
                    </div>

                    <div class='form-group'>
                        <label for='password'>Password</label>
                        <br>
                        <input type='password' name='password' id='password' value='{{ old('password') }}'>
                    </div>

                    <div class='form-group'>
                        <input type='checkbox' name='remember' id='remember'>
                        <label for='remember' class='checkboxLabel'>Remember me</label>
                    </div>

                    <button type='submit' class='btn btn-primary'>Login</button>
                </form>
            </div>
            <div class="col-md-8 col-md-pull-1">
                <img src="/pongo-2.jpg" class="img-responsive" alt="Pongo" height="500" width="710">
            </div>
        </div>
    </div>
@stop
