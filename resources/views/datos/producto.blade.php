<select name="id_producto" id="id_producto">
    <option value="0">Seleccione un producto</option>
    @foreach($productos as $producto)
    <option value="{{$producto->id_producto}}">{{$producto->nombre_producto}}</option>
    @endforeach
</select>


<script type="text/javascript">
    $(document).ready(function (){
        $('#id_producto').change(function () {
        var valproducto = $('#id_producto').val();
        if(valproducto ==0 ){
            
            
        }else{
            $('#guardar_venta').empty();
            $('#guardar_venta').load("{{route('crear_venta')}}?id_producto=" + valproducto);
        }

        });
    
    });
</script>