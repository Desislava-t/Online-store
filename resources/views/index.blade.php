@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Home page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Home-page')

@section('content')
    @include('partials.main-mav.main-nav')
    <swiper-component></swiper-component>
    <best-selling-component></best-selling-component>
    @include('partials.products')
    <blog-review-component></blog-review-component>
    <service-component></service-component>
    <subscriber-component-footer></subscriber-component-footer>
@endsection
