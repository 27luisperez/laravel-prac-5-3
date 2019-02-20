@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="{{url('clients')}}" class="btn btn-link">clients</a>
                    <a href="{{url('places')}}" class="btn btn-link">places</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
