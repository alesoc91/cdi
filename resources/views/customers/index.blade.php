@extends('layouts.app')

@section('content')

        <h1 class="title">Clienti</h1>
        <hr>
        <div id="newCustomer" class="row">
            <td><a href="{{action('CustomerController@create')}}" class="btn btn-primary">Nuovo Contatto</a></td>
        </div>
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Numero principale</th>
                    <th colspan="3"/>
                </tr>
                </thead>
                <tbody>

                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer['name']}}</td>
                        <td>{{$customer['lastname']}}</td>
                        <td>{{$customer['primary_number']}}</td>
                        <td><a href="{{action('CustomerController@detail', $customer['id'])}}" class="btn btn-info">Info</a></td>
                        <td><a href="{{action('CustomerController@edit', $customer['id'])}}" class="btn btn-warning">Edit</a></td>
                        <td><form action="{{action('CustomerController@destroy', $customer['id'])}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                             <button class="btn btn-danger" type="submit">Delete</button></form>
                         </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


@endsection
