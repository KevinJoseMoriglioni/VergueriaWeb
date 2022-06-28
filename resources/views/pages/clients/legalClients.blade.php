@extends('layouts.clients')
    @section('title',"Vergueria legal")
    @section('content')
    <div class="container">
        <div class="m-2">
            @if (isset($aspect))
                {{$aspect}}
            @endif
        </div>
    </div>
    @endsection