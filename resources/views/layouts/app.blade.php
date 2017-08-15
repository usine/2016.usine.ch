<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>L'Usine</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
  </head>
  <body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/">
        <img src="{{ asset('img/usine-logo.svg') }}" width="120" height="30" alt="Usine">
      </a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
          <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/') }}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('agenda') }}">Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('actualites') }}">
              Actualités
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url('association') }}" id="navbarDropdownMenuAssociation" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              L'association
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuAssociation">
              <a class="dropdown-item" href="{{ url('association/histoire') }}">Histoire</a>
              <a class="dropdown-item" href="{{ url('association/presentation-de-l-usine') }}">Présentation de L'Usine</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url('renseignements') }}" id="navbarDropdownMenuRenseignements" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Renseignements généreux
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuRenseignements">
              <a class="dropdown-item" href="{{ url('renseignements/lieu') }}">Le lieu</a>
              <a class="dropdown-item" href="{{ url('renseignements/contact') }}">Contact</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url('archives') }}" id="navbarDropdownMenuArchives" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Archives
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuArchives">
              <a class="dropdown-item" href="{{ url('archives/vox-usini') }}">Vox Usini</a>
              <a class="dropdown-item" href="{{ url('archives/fights') }}">Fights</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
      @yield('content')
    </div>

    <footer class="container mt-5 bt-1">
      <a href="#">archiCouture</a>
      <a href="#">azzuro matto</a>
      <a href="#">Le cheveu sur la soupe</a>
      <a href="#">cinéma Spoutnik</a>
      <a href="#">compost graphisme</a>
      <a href="#">Crache papier</a>
      <a href="#">Forde</a>
      <a href="#">Kalvingrad (le Rez)</a>
      <a href="#">La Makhno</a>
      <a href="#">radio-usine.net</a>
      <a href="#">Reklam, printshop & more</a>
      <a href="#">Shblth</a>
      <a href="#">studio des Forces motrices</a>
      <a href="#">studio Coffre-fort</a>
      <a href="#">TU - Théâtre de L'Usine</a>
      <a href="#">Urgence disk</a>
      <a href="#">Le Zoo, salle de nuit</a>
    </footer>
  </body>
</html>
