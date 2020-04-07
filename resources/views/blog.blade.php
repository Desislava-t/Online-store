@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Blog page, front-end, Php Laravel 6, CSS">
    <meta name="author" content="Desislava Georgieva, email : officedesislava@gmail.com, phone: 0897 722 275 ">
@endsection

@section('title-page','Blog')


@section('component')
    <blog-article-component></blog-article-component>
    <subscriber-component-footer></subscriber-component-footer>
@endsection