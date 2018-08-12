@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Passport Office</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer['id']}}</td>
                        <td>{{$customer['name']}}</td>
                        <td>{{$customer['lastname']}}</td>
                        <td></td>
                        <td></td>

                        <td></td>
                        <td>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
