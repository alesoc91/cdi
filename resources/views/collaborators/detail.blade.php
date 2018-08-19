@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Info Collaboratore</h2><br/>
                <form method="get" action="{{url('collaborators')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group  col-md-6">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" name="name" value="{{$collaborator[0]->name}}" readonly>
                        </div>
                        <div class="form-group  col-md-6">
                            <label for="lastname">Cognome:</label>
                            <input type="text" class="form-control" name="lastname" value="{{$collaborator[0]->lastname}}" readonly>
                        </div>
                        <div class="form-group  col-md-6">
                            <label for="role">Ruolo:</label>
                            <input type="text" class="form-control" name="role" value="{{$collaborator[0]->description}}" readonly>
                        </div>
                    </div>
                </form>
                <div id="comeBackToIndex" class="col-md-6">
                    <td><a href="{{action('CollaboratorController@index')}}" class="btn btn-primary">Torna alla lista</a></td>
                </div>
            </div>
        </div>

    </div>


@endsection
