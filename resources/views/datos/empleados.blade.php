<select name="id_empleado" id="id_empleado">
    <option value="0">Seleccione un Empleado</option>
    @foreach($empleados as $empleado)
    <option value="{{$empleado->id_empleado}}">{{$empleado->nombre_empleado}}</option>
    @endforeach
</select>

<script type="text/javascript">
    $(document).ready(function (){
        $('#id_empleado').change(function () {
        var valempleado = $('#id_empleado').val();
        if(valempleado ==0 ){
            
            
        }else{
        
            $('#foto_empleado').empty();
            $('#foto_empleado').load("{{route('foto_empleado')}}?id_empleado=" + valempleado).serialize();
        }

        });
    
    });
</script>
