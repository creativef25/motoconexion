<!DOCTYPE html>
<html lang="zxx">

@section('header')
    @include('layouts.partials.header')
@show

<body>
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div class="main-wrapper">

        @section('menu')
            @include('layouts.partials.menu')
        @show

        @yield('container')

        @section('footer')
            @include('layouts.partials.footer')
        @show

        <!-- Begin Scroll To Top -->
        <a class="scroll-to-top" href="">
            <i class="fa fa-chevron-up"></i>
        </a>
        <!-- Scroll To Top End Here -->

    </div>

    @section('script')
        @include('layouts.partials.javascript')        
    @show

</body>

</html>