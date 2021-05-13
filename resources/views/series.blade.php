@extends('layouts.layout')

@php
$series = config('series');
@endphp

@section('content')
    <section id="details">
        @include('layouts.main.series.top_bar')

        <div class="main">
            <div class="content">
                <div class="inner-content">
                    <div class="col">
                        <h1 class="title">{{$series[$id-1]['title']}}</h1>
                        <p class="description">{{$series[$id-1]['description']}}</p>
                    </div>
                    <div class="col">
                        content
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
