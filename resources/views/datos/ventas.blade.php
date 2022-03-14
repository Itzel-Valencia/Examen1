        <table border="1">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Producto</td>
                    <td>Tienda</td>
                    <td>Empleado</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                    <td>total</td>
                    <td>Fecha</td>
                </tr>
            </thead>
            <tbody>     
                @foreach($ventas as $venta)
                <tr>
                    <td>{{$venta->id_venta}}</td>
                    <td>{{$venta->producto}}</td>
                    <td>{{$venta->tienda}}</td>
                    <td>{{$venta->vendedor}}</td>
                    <td>{{$venta->precio}}</td>
                    <td>{{$venta->cantidad}}</td>
                    <td>{{$venta->total}}</td>
                    <td>{{$venta->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        