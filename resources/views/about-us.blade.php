@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, About us page, HTML, Php Laravel 6, CSS">
@endsection

@section('title-page','About us')


@section('content')
    @include('partials.main-mav.main-nav')
    <about-us-component></about-us-component>
    <service-component></service-component>
    <subscriber-component-footer></subscriber-component-footer>
@endsection