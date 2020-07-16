@extends('layouts.master')

@section('content')
<br><br>
<h3> Pour les réservations dans notre hôtel, entrez l'âge des personnes: </h3>
<br><br>
<form action="/pax/create" method="POST">
  @csrf
    <label for="fname">âges:</label>
    <input type="text" id="fname" name="fname" value=""> &ensp;
    <input  class="btn btn-primary" style="background-color:#3399ff" type="submit" value="Réserver">
    <br><br>
    <label for="datemin" ><b>Note:</b> Mettez une virgule entre deux âges consécutifs.</label>
  </form> 


@endsection
