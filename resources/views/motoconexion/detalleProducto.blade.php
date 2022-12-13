@extends('index')
@section('container')

<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('motoconexion/assets/images/breadcrumb/bg/1-1-1920x400.jpg')}}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 class="breadcrumb-heading">Detalle del Producto</h2>
                        <ul>
                            <li>
                                <a href="index.html">Inicio /</a>
                            </li>
                            <li>Detalle del Producto</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-area section-space-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-product-img">
                        <div class="swiper-container single-product-slider">
                            <div class="swiper-wrappe">
                                @foreach ($producto->imagenes as $imagen)
                                    <div class="swiper-slide">
                                        <a href="{{ asset('imagen/'.$imagen->path)}}" class="single-img gallery-popup">
                                            <img src="{{ asset('imagen/'.$imagen->path)}}" alt="" class="img-full">
                                        </a>
                                    </div>                                    
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-9 pt-lg-0">
                    <div class="single-product-content">
                        <h2 class="title mb-3">{{$producto->nombre}}</h2>
                        <div class="price-box pb-3">
                            <span class="new-price text-danger">$ {{$producto->precio}}</span>
                        </div>
                        <p class="short-desc mb-3">{{$producto->descripcion}}</p>
                        <ul class="quantity-with-btn pb-5">
                            <li class="quantity">
                                <div class="cart-plus-minus">
                                    <input type="text" class="cart-plus-minus-box" value="1">
                                </div>
                            </li>
                            <li class="add-to-cart">
                                <a href="" class="btn btn-custom-size lg-size btn-primary">Agregar</a>
                            </li>
                        </ul>
                        <div class="product-category pb-3">
                            <span class="title">Clave:</span>
                            <ul>
                                <li>
                                    <a href="#">{{$producto->clave}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-category pb-3">
                            <span class="title">Categoria:</span>
                            <ul>
                                <li>
                                    <a href="">{{$producto->id_categoria}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-category pb-3">
                            <span class="title">Marca:</span>
                            <ul>
                                <li>
                                    <a href="">{{$producto->id_marca}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-thumb-wrap pt-5 pt-lg-0 row">
                        <div class="col-12">
                            <div class="thumbs-arrow-holder p-0">
                                <div class="swiper-container single-product-thumbs">
                                    <div class="swiper-wrapper">
                                        @foreach ($producto->imagenes as $imagen)
                                            <a href="#" class="swiper-slide">
                                                <img src="{{ asset('imagen/'.$imagen->path)}}" alt="" class="img-full">
                                            </a>                                            
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background-img" data-bg-image="{{ asset('motoconexion/assets/images/background-img/1-2-1920x716.jpg')}}">
        <div class="product-area product-arrow section-space-y-axis-100">
            <div class="container">
                <div class="section-title pb-55">
                    <h2 class="title mb-0">Otros Productos</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper-container product-slider">
                            <div class="swiper-wrapper text-heading">
                                @foreach ($productoS as $produc)
                                    <div class="swiper-slide">
                                        <div class="product-item">
                                            <div class="product-img img-zoom-effect">
                                                <a href="">
                                                    <img src="{{ asset('imagen/'.$produc->imagenes[0]->path)}}" class="img-full">
                                                </a>
                                            </div>
                                            <div class="product-content">
                                                <a href="" class="product-name pb-1">{{$produc->nombre}}</a>
                                                <div class="price-box">
                                                    <div class="price-box-holder">
                                                        <span>Precio:</span>
                                                        <span class="new-price text-primary">$ {{$produc->precio}}</span>
                                                    </div>
                                                </div>
                                                <div class="product-add-action">
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('addProduc', $produc->id)}}" data-tippy="Agregar a carrito" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li class="quuickview-btn">
                                                            <a href="{{ route('detalleProducto', $produc->id)}}" data-tippy="Detalles">
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
                        <div class="product-button-wrap pt-10">
                            <div class="product-button-prev">
                                <i class="pe-7s-angle-left"></i>
                            </div>
                            <div class="product-button-next">
                                <i class="pe-7s-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
    
@endsection