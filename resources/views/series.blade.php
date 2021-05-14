@extends('layouts.layout')

@php
$series = config('series');
@endphp

@section('content')
    <section id="details">
        @include('layouts.main.series.top_bar')

        <div class="inner-details">
            <div class="content">
                <div class="inner-content">
                    <div class="col">
                        <h1 class="title">{{$series[$id-1]['title']}}</h1>
                        <div class="info">
                            <div class="inner-info">
                                <p>U.S. Price: <span class="price">{{$series[$id-1]['price']}}</span></p>
                                <span class="availability">available</span>
                            </div>
                            <div class="inner-info">
                                <span class="check-availability dropdown">Check Availability</span>
                            </div>
                        </div>
                        <p class="description">{{$series[$id-1]['description']}}</p>
                    </div>
                    <div class="col">
                        <div class="adv">
                            <span class="title">advertisement</span>
                            <a href="#"><img src="../images/adv.jpg" alt="adv"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inner-details">
            content
        </div>
    </section>
@endsection
