@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, blog-inormation page, HTML, Php Laravel 6, CSS">

@endsection

@section('title-page','Blog')

@section('content')
    @include('partials.main-nav.main-nav')
@endsection

@section('component')
    <blog-article-information></blog-article-information>
    <subscriber-component-footer></subscriber-component-footer>
@endsection