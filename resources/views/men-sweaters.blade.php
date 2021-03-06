@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Men sweaters page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Men-sweaters')

@section('content')
    @include('partials.main-mav.main-nav')
    @include('partials.men.men-sweaters')
    <subscriber-component-footer></subscriber-component-footer>
@endsection
