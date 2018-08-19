@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Modifica Contatto</h2><br  />
    <form method="post" action="{{action('CollaboratorController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-12"></div>
            <div class="form-group col-md-6">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" value="{{$collaborator[0]->name}}">
            </div>
            <div class="form-group col-md-6">
                <label for="lastname">Cognome</label>
                <input type="text" class="form-control"  name="lastname" value="{{$collaborator[0]->lastname}}">
            </div>
            <div class="form-group col-md-12">
                <label for="role">Ruolo:</label><br>
                <label><input type="radio" name="role" value="capo"/>Capo</label>
                <label><input type="radio" name="role" value="dipendente"/>Dipendente</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>

@endsection
