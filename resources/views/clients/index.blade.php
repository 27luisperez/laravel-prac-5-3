@extends("layouts.app");
@section("content")

<div class="container">
<div class="big-padding blue-grey white-text">
    <h4>clients:</h4>
    <a href="{{url('/clients/create')}}" class="btn btn-success">
        add
    </a>
</div>
    <table class="table table-bordered">
        <thead>
            <tr>
            <td>ID</td>
            <td>name</td>
            <td>address</td>
            <td>Acciones</td> 
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->address}}</td>
                    <td><a href="{{url('/clients/'.$client->id.'/edit')}}"><i class="fa fa-pencil"></i> Editar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection