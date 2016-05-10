<!-- Stored in resources/views/update.blade.php -->

@extends('layouts.master')

@section('css')
    label span.req {
    color: red;
    }
    ul#for_ul, ul#seo_ul {
    list-style-type: none;
    }
@endsection

@section('sidebar')
    <p><a class="btn btn-primary btn-lg" href="{{url('/mosti')}}">
            Take the survey now>>
        </a></p>
@endsection

@section('content')
    <h1>Edit: {!! $forseo->staffid !!}</h1><br>

    {!! Form::model($forseo, ['method' => 'PATCH', 'action' => ['ForseoController@update', $forseo->id]]) !!}

    <div class="form-group">
        {!! Form::label('staffid', 'Staff ID ') !!} <label><span class="req">*</span></label>
        {!! Form::text('staffid', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
    </div>
@endsection