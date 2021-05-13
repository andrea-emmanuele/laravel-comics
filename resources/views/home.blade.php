@extends('layouts.layout')

@section('content')
    <section id="series">
        <div class="content">
            <div class="inner-content">
                <div class="heading">
                    <h1>current series</h1>
                </div>
                @php
                    $series = config('series');
                @endphp
                <div class="cards">
                    @foreach ($series as $item)
                        <div class="card">
                            <div class="thumb">
                                <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                            </div>
                            <a class="title" href="series/{{$loop->index+1}}">{{$item['series']}}</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="inner-content">
                <button class="primary">load more</button>
            </div>
        </div>
        @include('layouts.main.bottom_bar')
    </section>
@endsection
