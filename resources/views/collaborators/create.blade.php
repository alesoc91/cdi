@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Nuovo Contatto</h2><br/>
                <form method="post" action="{{url('collaborators')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group  col-md-12">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group  col-md-12">
                            <label for="lastname">Cognome:</label>
                            <input type="text" class="form-control" name="lastname">
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
                            <button type="submit" class="btn btn-success">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
