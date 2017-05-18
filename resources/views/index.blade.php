<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{URL::asset('css/materialize.min.css')}}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{URL::asset('css/style.css')}}" />

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <div class="corpo"> 
    <div class="back">
        <div class="container">
          <div class="row">
            <div class="col s12">
            <h1 class="white-text center-align">Onde Levar?</h1>
            <h5 class="white-text center-align">Achamos as melhores oficinas para atender o seu problema!</h5>

            <div class="row">
              <form class="col s12">
                  <div class="input-field col s12 m6 offset-m3">

                    <input placeholder="Qual problema do seu carro?" id="first_name" type="text" class="validate" autofocus>

                    <center><a class="waves-effect white teal-text text-darken-4 btn"><i class="material-icons left">search</i>Localizar</a></center>

                  </div>
                  
              </form>
            </div>
            </div>
          </div>
        </div>
        <footer>
          <center><img src="http://ourboxdigital.com/image/logo.png" width="100px"></center>
        </footer>
    </div>
</div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="{{URL::asset('js/materialize.min.js')}}"></script>
    </body>
  </html>