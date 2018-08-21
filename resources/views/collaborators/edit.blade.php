@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Modifica Contatto</h2><br  />

    <form method="post" action="{{action('CollaboratorController@update', $collaborator->id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" value="{{$collaborator->name}}">
            </div>
            <div class="form-group col-md-6">
                <label for="lastname">Cognome</label>
                <input type="text" class="form-control"  name="lastname" value="{{$collaborator->lastname}}">
            </div>
            <div class="form-group col-md-12">
                <label for="role">Ruolo:</label><br>
                @foreach($roles as $key => $role)
                    <label style="text-transform: capitalize">
                        <input type="radio" name="role" {{$collaborator->role->code === $role->code ? "checked" : ""}} value="{{$role->code}}"/>{{$role->code}}
                    </label>
                @endforeach

            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12" >
                <button type="button" class="float-right btn btn-default" style="margin-left:38px">Cancel</button>
                <a type="submit" class="float-right btn btn-success" style="margin-left:38px">Update</a>

            </div>
        </div>
    </form>
</div>


@endsection
