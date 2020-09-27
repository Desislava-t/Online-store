@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Checkout page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Checkout')

@section('content')
    @include('partials.main-nav.main-nav')
    @include('partials.checkout')
@endsection

@section('component')
    <subscriber-component-footer></subscriber-component-footer>
@endsection