@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Women product page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Women')

@section('content')
    @include('partials.main-nav.main-nav')
    @include('partials.women.women-products')
@endsection

@section('component')
    <subscriber-component-footer></subscriber-component-footer>
@endsection