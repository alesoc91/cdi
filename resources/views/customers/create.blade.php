@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Nuovo Contatto</h2><br/>
                <form method="post" action="{{url('customers')}}" enctype="multipart/form-data">
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
                        <div class="form-group  col-md-12">
                            <label for="fiscalCode">Codice Fiscale:</label>
                            <input type="text" class="form-control" name="fiscalCode">
                        </div>
                        <div class="form-group  col-md-12">
                            <label for="birthDate">Data di nascita:</label>
                            <input type="date" class="form-control" name="birthDate">
                        </div >
                        <div class="form-group col-md-12">
                            <label for="gender">Sesso:</label><br>
                            <label><input type="radio" name="gender" value="uomo"/>Uomo</label>
                            <label><input type="radio" name="gender" value="donna"/>Donna</label>
                        </div>
                        <div class="form-group  col-md-8">
                            <label for="address">Indirizzo:</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                        <div class="form-group  col-md-4">
                            <label for="city">Città:</label>
                            <input type="text" class="form-control" name="city">
                        </div>
                        <div class="form-group  col-md-12">
                            <label for="email">Indirizzo di posta elettronica:</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group  col-md-6">
                            <label for="primaryNumber">Numero di telefono principale:</label>
                            <input type="text" class="form-control" name="primaryNumber">
                        </div>
                        <div class="form-group  col-md-6">
                            <label for="secondaryNumber">Numero di telefono secondario:</label>
                            <input type="text" class="form-control" name="secondaryNumber">
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
