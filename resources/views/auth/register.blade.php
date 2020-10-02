@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Register page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Register')

@section('content')
    @include ('partials.main-mav.main-nav')
    @include ('auth.partials.register')
    <subscriber-component-footer></subscriber-component-footer>
@endsection
