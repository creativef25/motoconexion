@extends('index')
@section('container')

<!-- Begin Main Content Area -->
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="{{ asset('motoconexion/assets/images/breadcrumb/bg/1-1-1920x400.jpg')}}">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 class="breadcrumb-heading">Administrador</h2>
                        <ul>
                            <li>
                                <a href="index.html">Inicio/</a>
                            </li>
                            <li>{{ Auth::user()->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="account-page-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab" href="#account-dashboard" role="tab" aria-controls="account-dashboard" aria-selected="true">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-marca-tab" data-bs-toggle="tab" href="#account-marca" role="tab" aria-controls="account-marca" aria-selected="false">Marca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-categoria-tab" data-bs-toggle="tab" href="#account-categoria" role="tab" aria-controls="account-categoria" aria-selected="false">Categoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-producto-tab" data-bs-toggle="tab" href="#account-producto" role="tab" aria-controls="account-producto" aria-selected="false">Producto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab" href="#account-orders" role="tab" aria-controls="account-orders" aria-selected="false">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-address-tab" data-bs-toggle="tab" href="#account-address" role="tab" aria-controls="account-address" aria-selected="false">Addresses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-details-tab" data-bs-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="false">Account Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id= "account-logout-tab" href="{{ route('logout')}}" role="tab" aria-selected="false" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                        <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel" aria-labelledby="account-dashboard-tab">
                            <div class="myaccount-dashboard">
                                <p>Hello <b>Tromic</b> (not Tromic? <a href="login-register.html">Sign
                                        out</a>)</p>
                                <p>From your account dashboard you can view your recent orders, manage your shipping and
                                    billing addresses and <a href="#">edit your password and account details</a>.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-marca" role="tabpanel" aria-labelledby="account-marca-tab">
                            <div class="myaccount-details">
                                <h4 class="small-title">Marcas</h4>
                                <form method="POST" action="{{ route('guardarMarca')}}" class="myaccount-form">
                                    @csrf
                                    <div class="myaccount-form-inner">
                                        <div class="single-input single-input-half">
                                            <label>Nombre</label>
                                            <input type="text" name="nombre" value="">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <button class="btn btn-custom-size lg-size btn-primary" type="submit">
                                                <span>Guardar</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="myaccount-orders">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Acciones</th>
                                            </tr>
                                            @foreach ($marcas as $marca)
                                            <tr>
                                                <td>{{$marca->id}}</td>
                                                <td>{{$marca->nombre}}</td>
                                                <td>
                                                    <form action="{{route('eliminarMarca', $marca->id)}}" method="post">
                                                        <a href="" class="btn btn-dark btn-primary-hover" data-bs-toggle="modal" data-bs-target="#quickModal{{$marca->id}}"><i class="pe-7s-note"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-dark btn-primary-hover"><i class="pe-7s-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-categoria" role="tabpane" aria-labelledby="account-categoria-tab">
                            <div class="myaccount-details">
                                <h4 class="small-title">Categorias</h4>
                                <form action="{{ route('guardarCategoria')}}" method="post" class="myaccount-form">
                                    @csrf
                                    <div class="myaccount-form-inner">
                                        <div class="single-input single-input-half">
                                            <label>Nombre</label>
                                            <input type="text" name="nombre" value="">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <button class="btn btn-custom-size lg-size btn-primary" type="submit">
                                                <span>Guardar</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="myaccount-orders">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Acciones</th>
                                            </tr>
                                            @foreach ($categorias as $categoria)
                                            <tr>
                                                <td>{{$categoria->id}}</td>
                                                <td>{{$categoria->nombre}}</td>
                                                <td>
                                                    <form action="{{ route('eliminarCategoria', $categoria->id)}}" method="post">
                                                        <a href="" class="btn btn-dark btn-primary-hover" data-bs-toggle="modal" data-bs-target="#quickModall{{$categoria->id}}"><i class="pe-7s-note"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-dark btn-primary-hover"><i class="pe-7s-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>                            
                        </div>
                        <div class="tab-pane fade" id="account-producto" role="tabpane" aria-labelledby="account-producto-tab">
                            <div class="myaccount-details">
                                <h4 class="small-title">Producto</h4>
                                <form action="{{ route('guardarProducto')}}" method="post" class="myaccount-form">
                                    @csrf
                                    <div class="myaccount-form-inner">
                                        <div class="single-input single-input-half">
                                            <label>Nombre</label>
                                            <input type="text" name="nombre" value="">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <label>Clave</label>
                                            <input type="text" name="clave" value="">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <label>Modelo</label>
                                            <input type="text" name="modelo" value="">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <label>Precio</label>
                                            <input type="text" name="precio" value="">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <div class="country-select clearfix">
                                                <label>Marca</label>
                                                <select name="id_marca" class="myniceselect nice-select wide">
                                                    @foreach ($marcas as $marca)
                                                        <option value="{{$marca->id}}">{{$marca->nombre}}</option>                                                        
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single-input single-input-half">
                                            <div class="country-select clearfix">
                                                <label>Categoria</label>
                                                <select name="id_categoria" class="myniceselect nice-select wide">
                                                    @foreach ($categorias as $categoria)
                                                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>                                                        
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single-input">
                                            <label>Descripcion</label>
                                            <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="single-input single-input-half">
                                            <button class="btn btn-custom-size lg-size btn-primary" type="submit">
                                                <span>Guardar</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="myaccount-orders">
                                <div class="table-responsive">
                                    <table class="table table-boredered table-hover">
                                        <tbody>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Clave</th>
                                                <th>Modelo</th>
                                                <th>Precio</th>
                                                <th>Marca</th>
                                                <th>Categoria</th>
                                                <th>Descripcion</th>
                                                <th>Acciones</th>
                                            </tr>
                                            @foreach ($productos as $producto)
                                            <tr>
                                                <td>{{$producto->id}}</td>
                                                <td>{{$producto->nombre}}</td>
                                                <td>{{$producto->clave}}</td>
                                                <td>{{$producto->modelo}}</td>
                                                <td>{{$producto->precio}}</td>
                                                <td>{{$producto->id_marca}}</td>
                                                <td>{{$producto->id_categoria}}</td>
                                                <td>{{$producto->descripcion}}</td>
                                                <td>
                                                    <form action="{{ route('eliminarProducto', $producto->id)}}" method="post">
                                                        <a href="" class="btn btn-dark btn-primary-hover" data-bs-toggle="modal" data-bs-target="#quickModal2{{$producto->id}}"><i class="pe-7s-note"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-dark btn-primary-hover"><i class="pe-7s-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                            <div class="myaccount-orders">
                                <h4 class="small-title">MY ORDERS</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                <th>ORDER</th>
                                                <th>DATE</th>
                                                <th>STATUS</th>
                                                <th>TOTAL</th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td><a class="account-order-id" href="#">#5364</a></td>
                                                <td>Mar 27, 2019</td>
                                                <td>On Hold</td>
                                                <td>$162.00 for 2 items</td>
                                                <td><a href="#" class="btn btn-dark btn-primary-hover"><span>View</span></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a class="account-order-id" href="#">#5356</a></td>
                                                <td>Mar 27, 2019</td>
                                                <td>On Hold</td>
                                                <td>$162.00 for 2 items</td>
                                                <td><a href="#" class="btn btn-dark btn-primary-hover"><span>View</span></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-address" role="tabpanel" aria-labelledby="account-address-tab">
                            <div class="myaccount-address">
                                <p>The following addresses will be used on the checkout page by default.</p>
                                <div class="row">
                                    <div class="col">
                                        <h4 class="small-title">BILLING ADDRESS</h4>
                                        <address>
                                            1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                        </address>
                                    </div>
                                    <div class="col">
                                        <h4 class="small-title">SHIPPING ADDRESS</h4>
                                        <address>
                                            1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-details" role="tabpanel" aria-labelledby="account-details-tab">
                            <div class="myaccount-details">
                                <form action="#" class="myaccount-form">
                                    <div class="myaccount-form-inner">
                                        <div class="single-input single-input-half">
                                            <label>First Name*</label>
                                            <input type="text">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <label>Last Name*</label>
                                            <input type="text">
                                        </div>
                                        <div class="single-input">
                                            <label>Email*</label>
                                            <input type="email">
                                        </div>
                                        <div class="single-input">
                                            <label>Current Password(leave blank to leave
                                                unchanged)</label>
                                            <input type="password">
                                        </div>
                                        <div class="single-input">
                                            <label>New Password (leave blank to leave
                                                unchanged)</label>
                                            <input type="password">
                                        </div>
                                        <div class="single-input">
                                            <label>Confirm New Password</label>
                                            <input type="password">
                                        </div>
                                        <div class="single-input">
                                            <button class="btn btn-custom-size lg-size btn-primary" type="submit">
                                                <span>SAVE CHANGES</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Content Area End Here -->

@foreach ($marcas as $marca)
<div class="modal fade" id="quickModal{{$marca->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="quickModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('actualizarMarca', $marca->id)}}" class="myaccount-form">
                    @csrf
                    @method('PUT')
                    <div class="myaccount-form-inner">
                        <div class="single-input single-input-half">
                            <label>Nombre</label>
                            <input type="text" name="nombre" value="{{$marca->nombre}}">
                        </div>
                        <div class="single-input single-input-half">
                            <button class="btn btn-custom-size lg-size btn-primary" type="submit">
                                <span>Guardar</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ($categorias as $categoria)
<div class="modal fade" id="quickModall{{$categoria->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="quickModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('actualizarCategoria', $categoria->id)}}" class="myaccount-form">
                    @csrf
                    @method('PUT')
                    <div class="myaccount-form-inner">
                        <div class="single-input single-input-half">
                            <label>Nombre</label>
                            <input type="text" name="nombre" value="{{$categoria->nombre}}">
                        </div>
                        <div class="single-input single-input-half">
                            <button class="btn btn-custom-size lg-size btn-primary" type="submit">
                                <span>Guardar</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ($productos as $producto)
<div class="modal fade" id="quickModal2{{$producto->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="quickModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('actualizarProducto', $producto->id)}}" method="post" class="myaccount-form">
                    @csrf
                    @method('PUT')
                    <div class="myaccount-form-inner">
                        <div class="single-input single-input-half">
                            <label>Nombre</label>
                            <input type="text" name="nombre" value="{{$producto->nombre}}">
                        </div>
                        <div class="single-input single-input-half">
                            <label>Clave</label>
                            <input type="text" name="clave" value="{{$producto->clave}}">
                        </div>
                        <div class="single-input single-input-half">
                            <label>Modelo</label>
                            <input type="text" name="modelo" value="{{$producto->modelo}}">
                        </div>
                        <div class="single-input single-input-half">
                            <label>Precio</label>
                            <input type="text" name="precio" value="{{$producto->precio}}">
                        </div>
                        <div class="single-input single-input-half">
                            <div class="country-select clearfix">
                                <label>Marca</label>
                                <select name="id_marca" class="myniceselect nice-select wide">
                                    @foreach ($marcas as $marca)
                                        <option value="{{$marca->id}}">{{$marca->nombre}}</option>                                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="single-input single-input-half">
                            <div class="country-select clearfix">
                                <label>Categoria</label>
                                <select name="id_categoria" class="myniceselect nice-select wide">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>                                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="single-input">
                            <label>Descripcion</label>
                            <textarea name="descripcion" id="" cols="30" rows="10">{{$producto->descripcion}}</textarea>
                        </div>
                        <div class="single-input single-input-half">
                            <button class="btn btn-custom-size lg-size btn-primary" type="submit">
                                <span>Guardar</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    
@endforeach
    
@endsection