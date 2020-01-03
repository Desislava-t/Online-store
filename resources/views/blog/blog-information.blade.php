@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, blog-inormation page, front-end, Php Laravel 6, CSS">
    <meta name="author" content="Desislava Georgieva, email : officedesislava@gmail.com, phone: 0897 722 275 ">
@endsection

@section('title-page','Blog')

@section('component')
    <blog-article-information></blog-article-information>
    <subscriber-component-footer></subscriber-component-footer>
@endsection