<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','Foobooks')
    </title>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="stylesheet" href="{{ URL::asset('bootstrap.min.css') }}" />

    <link href="/master.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>
    @if(\Session::has('flash_message'))
        <div class='flash_message'>
            {{ \Session::get('flash_message') }}
        </div>
    @endif

    <nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container-fluid">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">Project name</a>
       </div>
       <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">
           <li><a href="#">Dashboard</a></li>
           <li><a href="#">Settings</a></li>
           <li><a href="#">Profile</a></li>
           <li><a href="#">Help</a></li>
         </ul>
         <form class="navbar-form navbar-right">
           <input type="text" class="form-control" placeholder="Search...">
         </form>
       </div>
     </div>
   </nav>
   
</body>
</html>
