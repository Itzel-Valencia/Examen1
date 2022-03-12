@foreach($tiendas as $tienda)
<img src="{{('images/'.$tienda->foto)}}" alt="{{('images/'.$tienda->foto)}}" width="100" height="100">
@endforeach