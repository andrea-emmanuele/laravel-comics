@extends('layouts.layout')

@section('content')
    <section id="films">
        <div class="content">
            <div class="inner-content">
                <div class="heading">
                    <h1>current series</h1>
                </div>
                @php
                    $films = config('films');
                @endphp
                <div class="cards">
                    @foreach ($films as $film)
                        <div class="card">
                            <div class="thumb">
                                <img src="{{$film['thumb']}}" alt="{{$film['title']}}">
                            </div>
                            <a class="title" href="films/{{$loop->index+1}}">{{$film['series']}}</a>
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

@section('utilities_bar_content')
    aaa
@endsection
