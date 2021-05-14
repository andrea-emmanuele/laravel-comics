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
        <div class="back">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="26" viewBox="0 0 37 26">
                    <path id="arrow" d="M36.6635 10.3818L19.7046 0.118359C19.3525 -0.0940293 18.873 -0.0128201 18.6338 0.299765C18.5472 0.412983 18.5008 0.546664 18.5006 0.683553V6.85527C6.64481 7.29043 0.154147 17.7044 0 25.2816V25.3157C0 25.6936 0.345151 26 0.770881 26C1.19184 26.0001 1.53497 25.7003 1.54176 25.3267V25.287C1.62805 23.4492 9.7313 15.5217 18.5006 15.0729V21.2104C18.5011 21.5883 18.8466 21.8942 19.2723 21.8939C19.4265 21.8937 19.5771 21.8525 19.7047 21.7756L36.6636 11.5122C37.0152 11.2991 37.1058 10.8735 36.8658 10.5613C36.8115 10.4908 36.7429 10.4299 36.6635 10.3818Z" fill="currentColor"/>
                </svg>
            </a>
        </div>
    </div>
@endsection
