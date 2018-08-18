@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Info Contatto</h2><br/>
                <form method="get" action="{{url('customers')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" name="name" value="{{$customer['name']}}" readonly>
                        </div>
                        <div class="form-group  col-md-4">
                            <label for="lastname">Cognome:</label>
                            <input type="text" class="form-control" name="lastname" value="{{$customer['lastname']}}" readonly>
                        </div>
                        <div class="form-group  col-md-2">
                            <label for="gender">Sesso:</label>
                            <input type="text" class="form-control" name="gender" value="{{$customer['gender']}}" readonly>
                        </div>
                    </div>
                </form>
                <div id="comeBackToIndex" class="col-md-1">
                    <td><a href="{{action('CustomerController@index')}}" class="btn btn-primary">Torna alla lista</a></td>
                </div>
            </div>
        </div>

    </div>


@endsection
