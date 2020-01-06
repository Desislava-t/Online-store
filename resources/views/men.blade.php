@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Men product page, front-end, Php Laravel 6, CSS">
    <meta name="author" content="Desislava Georgieva, email : officedesislava@gmail.com, phone: 0897 722 275 ">
@endsection

@section('title-page','Men')

@section('content')
    @include('partials.men.men')
@endsection

@section('component')
    <subscriber-component-footer></subscriber-component-footer>
@endsection