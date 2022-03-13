@foreach($productos as $producto)
<h2>Formulario de venta del producto: {{$producto->nombre_producto}}</h2>
<table>
    <tr>
        <td>Nombre:</td>
        <td>{{$producto->nombre_producto}}</td>
        <td><img src="{{('images/'.$producto->foto)}}" alt="{{('images/'.$producto->foto)}}"></td>
    </tr>
    <tr>
        <td>Precio:</td>
        <td>{{$producto->precio}}</td>
        <input type="text" name="precio" id="precio" hidden value="{{$producto->precio}}">
    </tr>
    <tr>
        <td>Total:</td>
        <td><input type="text" name="total" id="total" style="border: none;"></td>
    </tr>
    <tr>
        <td>Cantidad:</td>
        <td><input type="text" name="cantidad" id="cantidad" onkeyup="Total()"></td>
    </tr>
</table>
@endforeach
<script type="text/javascript">
    function Total() {
            var n1 = document.getElementById('cantidad').value;
            var n2 = document.getElementById('precio').value;
            var total = parseInt(n1) * parseInt(n2);
            if(total >= 0){
            document.getElementById("total").value = total;
        }else{
            var total = 0;
            document.getElementById("total").value = total;
            }
        }
</script>