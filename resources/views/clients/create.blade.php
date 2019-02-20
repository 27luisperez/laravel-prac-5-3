@extends("layouts.app");

@section("content")
<div class="container white">
<h4>+ client</h4>
<div class="row">
    <div class="col-md-12">
        {!!Form::open(['url' => '/clients', 'id'=>'fp_1', 'method' => 'POST'])!!}
            <div class="form-group">
            <input type="text" id="name" name="name" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
            <input type="text" id="address" name="address" class="form-control" placeholder="address">
            </div>
            <div class="form-group text-right">
            <a href="{{url('/clients')}}" class="btn btn-info">regresar</a>
            <!--<input type="submit" value="Enviar" class="btn btn-success">--> 
            <button type="button" class="btn btn-default"  id="btn-fin-pedimento"> Guardar</button>
            </div>
        {!!Form::close()!!}
    </div>
</div>

</div> 

<script type="text/javascript">

  $(function(){
        $(document).ready(function(){
            $(".datePicker, name").datepicker({
                width:'150px',
                format:"yyyy-mm-dd"
            });
        });     
    })
    
 
</script>   
@stop
