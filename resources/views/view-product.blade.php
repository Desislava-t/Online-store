@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, View product page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','View-product')

@section('content')
    @include('partials.main-nav.main-nav')
    @include('partials.view-product')
@endsection

@section('component')
    <subscriber-component-footer></subscriber-component-footer>
@endsection