@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Home page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','')

@section('content')
    @include('partials.main-nav.main-nav')
    @include('partials.home')
@endsection

@section('component')
    <subscriber-component-footer></subscriber-component-footer>
@endsection