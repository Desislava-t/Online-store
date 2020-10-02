@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Men shirts page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Men-shirts')

@section('content')
    @include('partials.main-mav.main-nav')
    @include('partials.men.men-shirts')
    <subscriber-component-footer></subscriber-component-footer>
@endsection
