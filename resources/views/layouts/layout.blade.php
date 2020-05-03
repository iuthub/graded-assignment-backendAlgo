<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta charset="utf-8">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>To do List</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            /* Include the padding and border in an element's total width and height */
            * {
              box-sizing: border-box;
              font-family: Nunito, san-serif;
            }

            /* Remove margins and padding from the list */
            ul {
              margin: 0;
              padding: 0;
            }

            /* Style the list items */
            ul li {
              position: relative;
              padding: 12px 8px 12px 40px;
              background: #eee;
              font-size: 18px;
              transition: 0.2s;
              display: flex;
              flex-flow: row nowrap;
              align-items: center;
              justify-content: flex-start;


              /* make the list items unselectable */
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }

            /* Set all odd list items to a different color (zebra-stripes) */
            ul li:nth-child(odd) {
              background: #f9f9f9;
            }

            /* Darker background-color on hover */
            ul li:hover {
              background: #ddd;
            }

            ul li .task {
                flex-grow: 1;
            }

            ul li .action {
                margin: 5px 15px;
                vertical-align: middle;
            }

            ul li a {
                color: grey;
            }
         
            /* Style the header */
            .header {
              background-color: #f44336;
              padding: 30px 40px;
              color: white;
              text-align: center;
            }

            /* Clear floats after the header */
            .header:after {
              content: "";
              display: table;
              clear: both;
            }

            /* Style the input */
            input {
              margin: 0;
              border: none;
              border-radius: 0;
              width: 75%;
              padding: 10px;
              float: left;
              font-size: 16px;
            }

            /* Style the "Add" button */
            .addBtn {
              padding: 10px;
              width: 25%;
              background: #d9d9d9;
              color: #555;
              float: left;
              text-align: center;
              font-size: 16px;
              cursor: pointer;
              transition: 0.3s;
              border-radius: 0;
              border: none;
            }
            
            .info {
              padding: 5px;
              background: greenyellow;
            }
            .addBtn:hover {
              background-color: #bbb;
            }
        </style>
    </head>
    <body>
      <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    To do List
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div> 
        
        @yield('content')
    </body>
</html>
