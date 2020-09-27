@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Home page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Home-page')

@section('content')
    @include('partials.main-nav.main-nav')
    @include('partials.swiper')
    @include('partials.products')
@endsection

@section('component')
    <blog-review-component></blog-review-component>
    <service-component></service-component>
    <subscriber-component-footer></subscriber-component-footer>
@endsection