<!DOCTYPE html>
<html>
    <head>
        <title>
            Examen 
        </title>
        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

    </head>
    <body>
        <h2> Examen Itzel Valencia Nava</h2>
        <form action="" method="post">
            <select name="id_tienda" id="tienda">
                @foreach($tiendas as $tienda)
                <option value="0"> Seleccine una Tienda</option>
                <option value="{{$tienda->id_tiendas}}">{{$tienda->nombre_tienda}}</option>
                @endforeach
            </select>
            <div id="foto_tienda">
                <img src="images/descarga.jpg" alt="foto" width="100" height="100"> 
            </div>
            <br>
            <br>
            <div id="empleado">
            <select name="id_empleado" id="id_empleado">
                <option value="0">Seleccione un Empleado</option>
            </select>
        </div>
        <div id="foto_empleado"> 
            <img src="images/descarga.jpg" alt="foto" width="100" height="100"> 
            
        </div>
        </form>
    </body>
</html>



<script type="text/javascript">
    $(document).ready(function (){
        $('#tienda').change(function () {
        var valtienda = $('#tienda').val();
        if(valtienda ==0 ){
            
            
        }else{
            $('#empleado').empty();
            $('#empleado').load("{{route('empleados')}}?id_tienda=" + valtienda).serialize();
            $('#foto_tienda').load("{{route('foto_tienda')}}?id_tienda=" + valtienda);
        }

        });
    
    });
</script>





