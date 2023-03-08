@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Home</p>
    <ul>
        <li><a href="product">Product</a></li>
        <li><a href="news/unique-id">News</a></li>
        <li><a href="program">Program</a></li>
        <li><a href="about">About</a></li>
    </ul>
@stop

@section('footer')
    <p>Footer</p>
@stop

@section('js')
    <script>alert('POC Inject JS');</script>
@stop
