@extends('index')
@section('container')

<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('motoconexion/assets/images/breadcrumb/bg/1-1-1920x400.jpg')}}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 class="breadcrumb-heading">Checkout</h2>
                        <ul>
                            <li>
                                <a href="">Inicio/</a>
                            </li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="checkbox-form">
                        <h3>Detalles de Compra</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Nombre</label>
                                    <input type="text" name="" id="" value="{{ empty(Auth::user()->datos->nombre) ? " " : Auth::user()->datos->nombre}}" {{ empty(Auth::user()->datos->nombre) ? " " : "disabled"}}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Apellidos</label>
                                    <input type="text" name="" value="{{ empty(Auth::user()->datos->ape_Paterno) ? " " : (Auth::user()->datos->ape_Paterno." ".Auth::user()->datos->ape_Materno)}}" {{ empty(Auth::user()->datos->ape_Paterno) ? " " : "disabled"}}>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Calle</label>
                                    <input type="text" value="{{ empty(Auth::user()->datos->calle) ? " " : Auth::user()->datos->calle}}" {{ empty(Auth::user()->datos->calle) ? " " : "disabled"}}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Ciudad</label>
                                    <input type="text" value="{{ empty(Auth::user()->datos->ciudad) ? " " : Auth::user()->datos->ciudad}}" {{ empty(Auth::user()->datos->ciudad) ? " " : "disabled"}}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Colonia</label>
                                    <input type="text" value="{{ empty(Auth::user()->datos->colonia) ? " " : Auth::user()->datos->colonia}}" {{ empty(Auth::user()->datos->colonia) ? " " : "disabled"}}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Alcaldia</label>
                                    <input type="text" value="{{ empty(Auth::user()->datos->alcaldia) ? " " : Auth::user()->datos->alcaldia}}" {{ empty(Auth::user()->datos->alcaldia) ? " " : "disabled"}}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Codigo Postal</label>
                                    <input type="text" value="{{ empty(Auth::user()->datos->codigoPostal) ? " " : Auth::user()->datos->codigoPostal}}" {{ empty(Auth::user()->datos->codigoPostal) ? " " : "disabled"}}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Correo Electronico</label>
                                    <input type="text" value="{{ empty(Auth::user()->email) ? " " : Auth::user()->email}}" {{ empty(Auth::user()->email) ? " " : "disabled"}}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Celular</label>
                                    <input type="text" value="{{ empty(Auth::user()->datos->telefono) ? " " : Auth::user()->datos->telefono}}" {{ empty(Auth::user()->datos->telefono) ? " " : "disabled"}}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list create-acc">
                                    <input type="checkbox" id="cbox" value="{{Auth::user()->datos->tipo_entrega}}" {{ Auth::user()->datos->tipo_entrega == 1 ? "checked" : ""}}>
                                    <label for="cbox">Recoger en tienda</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>Tu orden</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Producto</th>
                                        <th class="cart-product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carri as $item)
                                    <tr class="cart-item">
                                        <td class="cart-product-name">{{$item->nombre}}<strong class="product-quantity"> x {{$item->cantidad}}</strong></td>
                                        <td class="cart-product-total"><span class="amount">$ {{$item->precio * $item->cantidad}}</span></td>
                                    </tr>                                        
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <th>Monto Total</th>
                                        <td><strong><span class="amount">$ {{$total}}</span></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div class="order-button-payment">
                                    <input type="submit" value="Place Order">
                                </div>
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
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    $("#cbox").on('change', function(){
            var valor = $(this).val();

            axios.post('{{ route('actualizarTipoentrega')}}',{
                valor:valor
            }).then(function(e){
                if (e.data == 0 || e.data == 1){
                    location.reload();
                }
            }).catch(function(er){
                console.log(er);
            });
        });
    $(document).ready(function(){
                
    });
</script>
    
@endpush