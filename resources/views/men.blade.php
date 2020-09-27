@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Men product page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Men')

@section('content')
    @include('partials.main-nav.main-nav')
    @include('partials.men.men')
@endsection

@section('component')
    <subscriber-component-footer></subscriber-component-footer>
@endsection