<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layoutComponents/head')
    <body>
        @include('layoutComponents/headerClients')
            @yield('content')
        @include('layoutComponents/footer')
    </body>
<script src="{{asset('js/app.js')}}" defer></script>
</html>