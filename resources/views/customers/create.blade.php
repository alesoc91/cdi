@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Nuovo Contatto</h2><br/>
                <form method="post" action="{{url('customers')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <div>
                                <label for="name">Nome:</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div>
                                <label for="lastname">Cognome:</label>
                                <input type="text" class="form-control" name="lastname">
                            </div>
                            <div>
                                <label for="fiscalCode">Codice Fiscale:</label>
                                <input type="text" class="form-control" name="fiscalCode">
                            </div>
                            <div>
                                <label for="birthDate">Data di nascita:</label>
                                <input type="date" class="form-control" name="birthDate">
                            </div>
                            <div>
                                <label for="genderType">Sesso:</label><br>
                                <label><input type="radio" name="genderType" value="MALE"/>Uomo</label>
                                <label><input type="radio" name="genderType" value="FEMALE"/>Donna</label>
                            </div>
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
