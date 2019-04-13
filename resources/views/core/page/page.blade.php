@extends('core.page.parcials.main')

@section('header')
    @include('core.page.parcials.header')
@endsection

@section('contenido')
    <div class="container">
        @include('core.page.content.datos')
        @include('core.page.content.intro')
        @include('core.page.content.entradas')
    </div>
@endsection

@section('footer')
    @include('core.page.parcials.footer')
@endsection
