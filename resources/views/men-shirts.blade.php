@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Men shirts page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Men-shirts')

@section('content')
    @include('partials.main-nav.main-nav')
    @include('partials.men.men-shirts')
@endsection

@section('component')
    <subscriber-component-footer></subscriber-component-footer>
@endsection