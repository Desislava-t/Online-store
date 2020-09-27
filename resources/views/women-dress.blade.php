@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Women dress page,Php Laravel 6, CSS,HTML">
@endsection

@section('title-page','Women-dress')

@section('content')
    @include('partials.women.women-dress')
@endsection

@section('component')
    @include('partials.main-nav.main-nav')
    <subscriber-component-footer></subscriber-component-footer>
@endsection