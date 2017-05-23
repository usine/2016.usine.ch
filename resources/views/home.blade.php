@extends('layouts.app')

@section('content')
<div class="row justify-content-center mb-3">
  <img src="{{ asset('img/home/usine.svg') }}" alt="L'Usine" style="height: 12em;">
</div>

<p>
  L’Usine est un Centre Culturel Autogéré située dans le bâtiment de l’ancienne <i>Usine Genevoise de Dégrossissage d’Or</i> - UGDO - attribué par la Ville de Genève pour y réaliser des activités artistiques et socioculturelles.
</p>

<div class="row xyz">
  <div class="col-12 col-md">
    <a href="/lesblahs">les blas</a>
  </div>
  <div class="col-12 col-md">
    <a href="#">l'agenda</a>
  </div>
  <div class="col-12 col-md">
    <a href="#">le voxUsini</a>
  </div>
</div>

<div class="row xyz">
  <div class="col-12 col-md">
    <a href="#">les renseignements généreux</a>
  </div>
  <div class="col-12 col-md">
    <a href="#">l'association</a>
  </div>
  <div class="col-12 col-md">
    <a href="#">les fights</a>
  </div>
</div>

<div class="row xyz">
  <div class="col-12 col-md">
    <a href="#">les petites annonces</a>
  </div>
  <div class="col-12 col-md">
    <a href="#">la radio</a>
  </div>
  <div class="col-12 col-md">
    <a href="#">le(s) reste(s)</a>
  </div>
</div>

<style media="screen">
  .xyz > div {
    height: 200px;
  }
  .xyz > div > a {
    font-size: 1.5rem;
    display: inline-block;
    width: 100%;
    height: 100%;

    border: 1px solid black;
  }
</style>
@endsection
