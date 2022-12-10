@extends('index')
@section('container')

<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('motoconexion/assets/images/breadcrumb/bg/1-1-1920x400.jpg')}}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 class="breadcrumb-heading">Mi Carrito</h2>
                        <ul>
                            <li>
                                <a href="">Inicio/</a>
                            </li>
                            <li>Carrito</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product_remove">Eliminar</th>
                                    <th class="product-thumbnail">Imagen</th>
                                    <th class="cart-product-name">Producto</th>
                                    <th class="product-price">Precio</th>
                                    <th class="product-quantity">Cantidad</th>
                                    <th>Actualizar</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carri as $carritos)
                                <tr>
                                    <td class="product_remove">
                                        <a href="{{ route('eliminarProduc', $carritos->id)}}">
                                            <i class="pe-7s-trash" data-tippy="Eliminar" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                        </a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <img src="{{ asset('imagen/'.$carritos->imagenes[0]->path)}}" style="width: 112px">
                                    </td>
                                    <td class="product-name">{{$carritos->nombre}}</td>
                                    <td class="product-price"><span class="amount">${{$carritos->precio}}</span></td>
                                    <td class="quantity">
                                        <div class="cart-plus-minus">
                                            <input type="text" class="cart-plus-minus-box" value="{{$carritos->cantidad}}" id="cantidad_{{$carritos->id}}">
                                            <div class="dec qtybutton">
                                                <i class="fa fa-minus"></i>
                                            </div>
                                            <div class="inc qtybutton">
                                                <i class="fa fa-plus"></i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product_remove">           
                                        <a class="btn-update" href="#" data-href="{{ route('actualizarCantidad', $carritos->id)}}" data-id="{{$carritos->id}}">
                                            <i class="pe-7s-refresh-2" data-tippy="Actualizar" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                        </a>
                                         
                                    </td>
                                    <td class="product-subtotal"><span class="amount">${{$carritos->precio * $carritos->cantidad}}</span> </td>
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Precio Total</h2>
                                <ul>
                                    <li>Total <span>${{$total}}</span></li>
                                </ul>
                                @guest
                                    <a href="{{ route('login')}}">Ingresar Datos</a>
                                @else
                                    <a href="{{ route('checkout')}}">Checkout</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
    
@endsection
@push('script')
<script type="text/javascript">
$(document).ready(function(){
    $('.btn-update').on('click', function(e){
        e.preventDefault();
        
        var id = $(this).data('id');
        var href = $(this).data('href');
        var cantidad = $("#cantidad_"+id).val();

        window.location.href = href + "/" + cantidad;
    });
});

</script>
    
@endpush