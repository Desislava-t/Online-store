@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Home page, front-end, Php Laravel 6, CSS">
    <meta name="author" content="Desislava Georgieva, email : officedesislava@gmail.com, phone: 0897 722 275 ">
@endsection

@section('title-page','Home-page')

@section('content')
    @include ('partials.swiper')
    @include('partials.products')
@endsection

@section('component')
    <blog-review-component></blog-review-component>
    <service-component></service-component>
    <subscriber-component-footer></subscriber-component-footer>
@endsection