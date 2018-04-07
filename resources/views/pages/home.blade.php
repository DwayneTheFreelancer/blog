@extends('layouts.main')

@section('title')
    Home Page
@endsection

@section('sidebar')
    This is the side menu
@endsection

@section('content')
    @if($age > 20) 
        Welcome back, {{ $user_name }} your age is still {{ $age }}
    @else
        its bigger than 28
    @endif

@endsection
