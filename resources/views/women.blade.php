@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Women product page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Women')

@section('content')
    @include('partials.main-mav.main-nav')
    @include('partials.women.women-products')
    <subscriber-component-footer></subscriber-component-footer>

@endsection

@section('component')
@endsection