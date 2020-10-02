@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Blog page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Blog')

@section('content')
    @include('partials.main-mav.main-nav')
    <blog-article-component></blog-article-component>
    <subscriber-component-footer></subscriber-component-footer>
@endsection
