@extends('layouts.app')

@section('content')

    <div class="container">
        <div id="newCustomer" class="row">
            <td><a href="{{action('CustomerController@create')}}" class="btn btn-primary">Nuovo Contatto</a></td>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Codice Fiscale</th>
                    <!--<th>Sesso</th>-->
                    <th>Data di nascita</th>
                    <th>Città</th>
                    <th>Inidirizzo</th>
                    <th>E-mail</th>
                    <th>Numero principale</th>
                    <th>Numero secondario</th>
                    <th>Note</th>
                    <!--<th>Collaboratore preferito</th>-->
                    <!--<th>Servizio Preferito</th>-->
                    <!--<th>Frequenza prenotazione</th>-->
                    <!--<th>Cliente dal</th>-->
                    <th>Acquisito Online</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer['name']}}</td>
                        <td>{{$customer['lastname']}}</td>
                        <td>{{$customer['fiscal_code']}}</td>
                        <!-->
                        <td>{{$customer['birth_date']}}</td>
                        <td>{{$customer['city']}}</td>
                        <td>{{$customer['address']}}</td>
                        <td>{{$customer['email']}}</td>
                        <td>{{$customer['primary_number']}}</td>
                        <td>{{$customer['secondary_number']}}</td>
                        <td>{{$customer['note']}}</td>
                        <!-->
                        <!-->
                        <!-->
                        <!-->
                        <td>{{$customer['from_online']}}</td>
                        <td><a href="{{action('CustomerController@edit', $customer['id'])}}" class="btn btn-warning">Edit</a></td>
                         <td>   <form action="{{action('CustomerController@destroy', $customer['id'])}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button></form>
                         </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
