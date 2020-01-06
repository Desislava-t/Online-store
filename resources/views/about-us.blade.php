@extends('layouts.app')

@section('meta')
    <meta name="description" content="Demo online magazine, About us page, front-end, Php Laravel 6, CSS">
    <meta name="author" content="Desislava Georgieva, email : officedesislava@gmail.com, phone: 0897 722 275 ">
@endsection

@section('title-page','About us')


@section('component')
    <about-us-component></about-us-component>
    <service-component></service-component>
    <subscriber-component-footer></subscriber-component-footer>
@endsection