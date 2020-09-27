@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Accessories product page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Accessories')

@section('content')
    @include('partials.main-nav.main-nav')
    @include('partials.accessories.accessories')
@endsection

@section('component')
    <subscriber-component-footer></subscriber-component-footer>
@endsection