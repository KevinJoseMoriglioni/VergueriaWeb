<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layoutComponents/head')
    <body>
        @include('layoutComponents/headerClients')
        <div class="container p-0 my-1">
            <div class="row m-0">
                <div class="col-center col-10 p-0">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('layoutComponents/footer')
    </body>
<script src="{{asset('js/app.js')}}" defer></script>
</html>