@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, Women dress page, front-end, Php Laravel 6, CSS">
    <meta name="author" content="Desislava Georgieva, email : officedesislava@gmail.com, phone: 0897 722 275 ">
@endsection

@section('title-page','Women-dress')

@section('content')
    @include('partials.women.women-dress')
@endsection

@section('component')
    <subscriber-component-footer></subscriber-component-footer>
@endsection