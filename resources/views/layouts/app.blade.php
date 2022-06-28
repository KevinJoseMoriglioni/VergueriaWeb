<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layoutComponents/head')
    <body>
        @include('layoutComponents/headerAdmins')
        <div class="container p-0 my-1">
            <div class="row m-0">
                <div class="col-3 col-sm-2 col-md-2 col-lg-1 col-xl-1 bg-vergueria p-0">
                    @include('layoutComponents/adminNavbar')
                </div>
                <div class="col-9 col-sm-10 col-md-10 col-lg-11 col-xl-11">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layoutComponents/footer')
    </body>
<script src="{{asset('js/app.js')}}" defer></script>
</html>
