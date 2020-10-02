@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Accessories sunglasses, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Accessories-sunglasses')

@section('content')
    @include('partials.main-mav.main-nav')
    @include('partials.accessories.accessories-sunglasses')
    <subscriber-component-footer></subscriber-component-footer>
@endsection
