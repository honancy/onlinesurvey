@extends('layouts.master')

@section('sidebar')
    <p><a class="btn btn-primary btn-lg" href="{{url('/mosti')}}">
            Take the survey now>>
        </a></p>
@endsection

@section('content')
    <h1>View All</h1>

            <div >
                <h2>Staff ID: {{ $forseo->staffid }}</h2>
                <h3>Author Names: {{ $forseo->authornames }}</h3>
                <h3>Fields of Research (FOR): {{ $forseo->forarea }}</h3>
                <h3>Socio-economic Objectives (SEO): {{ $forseo->seo }}</h3>
                <h3>Comments: {{ $forseo->comments }}</h3>
            </div>

@stop