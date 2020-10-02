@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Women dress page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Women-dress')

@section('content')
    @include('partials.main-mav.main-nav')
    @include('partials.women.women-dress')
    <subscriber-component-footer></subscriber-component-footer>
@endsection
