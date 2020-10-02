@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, View product page, HTML, Php Laravel 6, CSS">

@endsection

@section('title-page','View-product')

@section('content')
    @include('partials.main-mav.main-nav')
    @include('partials.view-product')
    <subscriber-component-footer></subscriber-component-footer>
@endsection
