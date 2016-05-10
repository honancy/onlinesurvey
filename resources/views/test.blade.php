<!-- Stored in resources/views/test.blade.php -->

@extends('layouts.master')

@section('title', 'info')

@section('sidebar')
    @parent
    {{ $first }}
    {{ $last }}

@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
