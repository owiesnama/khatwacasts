@extends('layouts.app')
@section('content')
    <div class="container mx-auto">
        @forelse($podcasts as $podcast)
            <div class="p-4 mb-8 rounded-lg shadow">
                <div class="py-3 px-1 flex">
                    <div class="rounded-full md:h-24 md:w-24 xs:h-16 xs:w-16 p-1 border border-solid border-pink-600">
                        <img src="{{asset('images/thumbnail.jpg')}}"
                             class="rounded-full w-full h-full"
                             alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full justify-center ml-1 p-1">
                        <h4>
                            <a href="{{url('podcasts/'.$podcast->id)}}" class="text-blue-800">{{$podcast->title}}</a>
                        </h4>
                        <p class="font-light text-gray-500">{{Str::words($podcast->description,15)}}</p>

                        <div class="flex mb-0 mt-auto justify-between">
                        <span class="text-sm text-dark font-light">
                            {{(new \Carbon\Carbon($podcast->length))->isoFormat('h:mm:ss')}}
                        </span>
                            <like-button></like-button>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="font-hairline text-sm text-gray-500">
                There is no podcasts for now
            </p>
        @endforelse
    </div>
@endsection