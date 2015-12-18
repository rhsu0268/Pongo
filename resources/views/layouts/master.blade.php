<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Pongo' --}}
        @yield('title','Pongo')
    </title>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="stylesheet" href="{{ URL::asset('bootstrap.min.css') }}" />

    <!--<link href="/master.css" type='text/css' rel='stylesheet'>-->
    <link rel="stylesheet" href="{{ URL::asset('master.css') }}" />

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>
    <div class="container">
        @if(\Session::has('flash_message'))
            <div id='flash_message'>
                {{ \Session::get('flash_message') }}
            </div>
        @endif

        <!-- Static navbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Pongo</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                        @if(Auth::check())
                            <li><a href="/myspace">myspace</a></li>
                            <li><a href="/addItem">Add Item</a></li>
                            <li><a href="/browseItems">Browse Items</a></li>
                        @endif
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if(!Auth::check())
                        <li><a href="/register">Create Account</a></li>
                        <li><a href="/login">Sign In</a></li>
                        @else
                            <li><a href='/logout'>Log out</a></li>
                        @endif

                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>

        <section>
            {{-- Main page content will be yielded here --}}
            @yield('content')
        </section>
        <!-- Main component for a primary marketing message or call to action -->

        <br><br><br><br>

        <footer>
            Richard Hsu &copy; {{ date('Y') }} &nbsp;&nbsp;
            <a href='https://github.com/rhsu0268/Pongo' class='fa fa-github' target='_blank'> View on Github</a> &nbsp;&nbsp;
        </footer>


    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
