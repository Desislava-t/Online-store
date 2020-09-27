@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Women jeans page, front-end, Php Laravel 6, CSS">
@endsection

@section('title-page','Women-jeans')


@section('content')
    @include('partials.main-nav.main-nav')
    @include('partials.women.women-jeans')
@endsection

@section('component')
    <subscriber-component-footer></subscriber-component-footer>
@endsection