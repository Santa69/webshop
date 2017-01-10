<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- recuperer un element qui porte le nom title -->
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset ('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}" rel="stylesheet" type="text/css">

  </head>
  <body>

    <header>
      <nav class="navbar navbar-inverse">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/">Application</a>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>

                    <li><a href="contact">Contact</a></li>
                    <li><a href="magasin">Magasin</a></li>

                    @if (Auth::check())
                    {{-- Verification si user logger il affiche logout
                      sinon il affiche login et register --}}
                      <li><a href="panier">Mon Panier</a></li>
                    <li><a href="logout">Logout</a></li>
                    @else
                    <li><a href="login">Login</a></li>
                    <li><a href="register">Register</a></li>
                    @endif

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </nav>
          <div class="alert alert-success">

            {{-- <div class="alert alert-success" role="alert">
                    <strong>Well done!</strong> You successfully read this important alert message.
                  </div> --}}
            @if(Auth::check())
               {{-- Afficher le nom d'utilisateur--}}
               <span>Bienvenue : {{ Auth::user()->name }}</span>
             @else
               <span>Anonyme</span>
             @endif
           </div>

    </header>
    <div class="container" id="titrebody">@yield('content')</div>
    <footer>
        <p>Copyright : ITAkademy 2017</p>
        <a href="contact">Contact</a>
    </footer>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
