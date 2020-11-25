@extends('layouts.default')
@section('title', 'Dashboard')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome, {{ Auth::user()->name }}!</h1>
        <p class="lead">This is a simple CRUD (Create, Read, Update, Delete) students data.</p>
        <hr class="my-4">
        <p>Development by Fakta Arief using Laravel 8.</p>
    </div>
@endsection