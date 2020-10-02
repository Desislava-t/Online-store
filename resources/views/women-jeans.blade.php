@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Women jeans page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Women-jeans')


@section('content')
    @include('partials.main-mav.main-nav')
    @include('partials.women.women-jeans')
    <subscriber-component-footer></subscriber-component-footer>
@endsection

