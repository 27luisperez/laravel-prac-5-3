@extends("layouts.app");

@section("content")
<div class="container white">
<h4>+ place</h4>
<div class="row">
    <div class="col-md-7">
        {!!Form::open(['url' => '/places', 'id'=>'fp_1', 'method' => 'POST'])!!}
            <div class="form-group">
            	<input type="text" id="name" name="name" class="form-control" placeholder="name">
            </div>
            
            <div class="form-group text-right">
            	<a href="{{url('/places')}}" class="btn btn-info">regresar</a>
            <!--<input type="submit" value="Enviar" class="btn btn-success">--> 
            	<button type="submit" class="btn btn-default"  id="btn-fin-pedimento"> Guardar</button>
            </div>
        {!!Form::close()!!}
    </div>
</div>

</div> 

@stop
