@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Home page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','')

@section('content')
    @include('partials.main-mav.main-nav')
    @include('partials.home')
    <subscriber-component-footer></subscriber-component-footer>
@endsection
