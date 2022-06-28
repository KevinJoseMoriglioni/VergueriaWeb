@extends('layouts.clients')
    @section('title',"Vergueria home")
    @section('content')
    <div class="container">
        <div class="m-2">
            @include('pagesComponents/bannerHeader')
        </div>
        <div class="m-2">
            @include('pagesComponents/cardHorizontalLeft')
        </div>
        <div class="m-2">
            @include('pagesComponents/cardHorizontalRight')
        </div>
        <div class="m-2">
            @include('pagesComponents/formTOBuyProduct')
        </div>
    </div>
    @endsection
