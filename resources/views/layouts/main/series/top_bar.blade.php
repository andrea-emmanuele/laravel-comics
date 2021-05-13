@extends('layouts.components.utilities_bar')

@php
$series = config('series');
@endphp

@section('bar_content')
    <div class="inner-content">
        <div class="wrapper">
            <div class="preview">
                <img src="{{$series[$id-1]['thumb']}}" alt="{{$series[$id-1]['title']}}">
            </div>
        </div>
    </div>
@endsection
