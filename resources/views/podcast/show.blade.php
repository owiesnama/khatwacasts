@extends('layouts.app')
@section('content')
    <div class="container mx-auto">
        <Audio-Player source="{{asset('podcasts/podcast.mp3')}}"></Audio-Player>
    </div>
@endsection