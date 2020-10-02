@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, blog-information page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','Blog')

@section('content')
    @include ('partials.main-mav.main-nav')
    <blog-article-information></blog-article-information>
    <subscriber-component-footer></subscriber-component-footer>
@endsection