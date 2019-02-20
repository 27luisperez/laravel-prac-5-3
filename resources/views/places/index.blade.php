@extends("layouts.app");
@section("content")

<div class="container">
<div class="big-padding blue-grey white-text">
    <h4>places:</h4>
    <a href="{{url('/places/create')}}" class="btn btn-success">
        add
    </a>
</div>
<div class="row"> 
    <div class="col-md-7">
        <table class="table table-bordered">
            <thead>
                <tr>
                <td>ID</td>
                <td>name</td> 
                </tr>
            </thead>
            <tbody>
                @foreach($places as $place)
                    <tr>
                        <td>{{$place->id}}</td>
                        <td>{{$place->name}}</td>
                        <td><a href="{{url('/places/'.$place->id.'/edit')}}"><i class="fa fa-pencil"></i> Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
</div>
@endsection