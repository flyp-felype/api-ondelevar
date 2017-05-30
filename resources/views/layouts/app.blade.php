<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{URL::asset('css/materialize.min.css')}}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{URL::asset('css/style.css')}}" />

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">



<!-- Page Layout here -->
    <div class="row">

      <div class="col s12 m4 l3">

  <ul id="slide-out" class="side-nav fixed blue-grey darken-4 white-text">
    <li><div class="userView">
      <div class="background">
        <img src="{{URL::asset('images/bg-admin.jpg')}}">
      </div>
        @if (Auth::guest())
      <a href="{{ route('login') }}">Login</a> |
                          <a href="{{ route('register') }}">Register</a>
                        @else
                             <a href="#!name"><span class="white-text name">       {{ Auth::user()->name }}</span></a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        @endif



    </div></li>

    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
         <li>
        <a href="#!" class="white-text collapsible-header"><i class="material-icons white-text">business</i> Oficinas</a>
        <div class="collapsible-body">
              <ul class="blue-grey darken-3 white-text">
                <li><a href="#!" class="white-text">Ver Oficinas</a></li>
                <li><a href="{{ URL::asset('oficina/create') }}" class=" white-text">Nova Oficina</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>

    <li><a href="#!" class="white-text collapsible-header"><i class="material-icons white-text">comment</i> Comentários</a></li>
        <li><a href="#!" class="white-text collapsible-header"><i class="material-icons white-text">star</i> Pontuação</a></li>

    <!-- <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li> -->
    <li>

                        </li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>



      </div>

      <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->

        @yield('content')

      </div>

    </div>


    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

          <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{URL::asset('js/materialize.min.js')}}"></script>

      <script>
        $(document).ready(function(){
              $(".button-collapse").sideNav();
        })
      </script>
</body>
</html>
