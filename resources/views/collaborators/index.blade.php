@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Ruolo</th>
                    <th colspan="3"></th>
                </tr>
                </thead>
                <tbody>

                @foreach($collaborators as $key => $collaborator)
                    <tr>
                        <td>{{$collaborator->name}}</td>
                        <td>{{$collaborator->lastname}}</td>
                        <td>{{$collaborator->description}}</td>
                        <td><a href="{{action('CollaboratorController@detail', $collaborator->id)}}" class="btn btn-info">Info</a></td>
                        <td><a href="{{action('CollaboratorController@edit', $collaborator->id)}}" class="btn btn-warning">Edit</a></td>
                        <td><form action="{{action('CollaboratorController@destroy', $collaborator->id)}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                             <button class="btn btn-danger" type="submit">Delete</button></form>
                         </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div id="newCollaborator" class="row">
            <td align="right"><a href="{{action('CollaboratorController@create')}}" class="btn btn-primary">Nuovo Collaboratore</a></td>
        </div>
    </div>


@endsection
