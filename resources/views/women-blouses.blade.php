@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Women blouses page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Women-blouses')

@section('content')
    @include('partials.main-mav.main-nav')
    @include('partials.women.women-blouses')
    <subscriber-component-footer></subscriber-component-footer>
@endsection
