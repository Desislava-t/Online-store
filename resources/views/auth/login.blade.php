@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Login page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Login')

@section('content')
    @include('partials.main-nav.main-nav')
    @include('auth.partials.login')
@endsection
