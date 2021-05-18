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
                        <h1 class="big-title">{{$series[$id-1]['title']}}</h1>
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
                            <a href="#"><img src="{{ asset('images/adv.jpg') }}" alt="adv"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inner-details">
            <div class="content">
                <div class="inner-content">
                    <div class="col w5">
                        <div class="item">
                            <h1 class="medium-title">Talent</h1>
                        </div>
                        <div class="item">
                            <div class="inner-item">
                                <span class="inner-title">Art by:</span>
                            </div>
                            <div class="inner-item right">
                                @foreach($series[$id-1]['artists'] as $artist)
                                    @if ($loop->remaining)
                                        <a class="artist inner-title" href="#">{{$artist}}</a><span>,</span>
                                    @endif
                                    @if ($loop->last)
                                        <a class="inner-title" href="#">{{$artist}}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner-item">
                                <span class="inner-title">Written by:</span>
                            </div>
                            <div class="inner-item right">
                                @foreach($series[$id-1]['writers'] as $writer)
                                    @if ($loop->remaining)
                                        <a class="inner-title" href="#">{{$writer}}</a><span>,</span>
                                    @endif
                                    @if ($loop->last)
                                        <a class="inner-title" href="#">{{$writer}}</a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col w5">
                        <div class="item">
                            <h1 class="medium-title">Specs</h1>
                        </div>
                        <div class="item">
                            <div class="inner-item">
                                <span class="inner-title">Series:</span>
                            </div>
                            <div class="inner-item">
                                <a class="series inner-title upper" href="#">{{$series[$id-1]['series']}}</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner-item">
                                <span class="inner-title">U.S. Price:</span>
                            </div>
                            <div class="inner-item">
                                <span class="inner-title">{{$series[$id-1]['price']}}</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner-item">
                                <span class="inner-title">On Sale Date:</span>
                            </div>
                            <div class="inner-item">
                                <span class="inner-title">{{ date_format(date_create($series[$id-1]['sale_date']), 'F d Y')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
