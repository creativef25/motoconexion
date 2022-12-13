@extends('index')
@section('container')

<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('motoconexion/assets/images/breadcrumb/bg/1-1-1920x400.jpg')}}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 class="breadcrumb-heading">Productos</h2>
                        <ul>
                            <li>
                                <a href="index.html">Inicio /</a>
                            </li>
                            <li>Productos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content text-charcoal pt-8">
                        <div class="tab-pane fade show active" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                            <div class="product-grid-view row">
                                @foreach ($productos as $producto)
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="">
                                                    <img class="img-full" src="{{ asset('imagen/'.$producto->imagenes[0]->path)}}">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a class="product-name pb-1">{{$producto->nombre}}</a>
                                                <div class="price-box">
                                                    <div class="price-box-holder">
                                                        <span>Precio:</span>
                                                        <span class="new-price text-primary">${{$producto->precio}}</span>
                                                    </div>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('addProduc', $producto->id)}}" data-tippy="Agregar a carrito" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="quuickview-btn">
                                                            <a href="{{ route('detalleProducto', $producto->id)}}" data-tippy="Detalles">
                                                                <i class="pe-7s-look"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="pagination-area pt-10">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                {{$productos->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
    
@endsection