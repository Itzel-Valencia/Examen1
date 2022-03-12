@foreach($empleados as $empleado)
<img src="{{('images/'.$empleado->foto)}}" alt="{{('images/'.$empleado->foto)}}" width="100" height="100">
@endforeach