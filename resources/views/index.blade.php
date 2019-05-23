@extends('layouts.app')
@section('content')
    <div class="container mx-auto">
        <div>
            <div class="py-3 px-1 flex">
                <div class="rounded-full md:h-24 md:w-24 xs:h-16 xs:w-16 p-1 border border-solid border-pink-600">
                    <img src="{{asset('images/thumbnail.jpg')}}"
                         class="rounded-full w-full h-full"
                         alt="thumbnail">
                </div>
                <div class="flex flex-col justify-center ml-1 p-1">
                    <h4>
                        <a href="/1" class="text-blue-800">Awesome Podcast</a>
                    </h4>
                    <p class="font-light text-gray-500">An awesome podcast by owiesnam and yousif omar , #laravel #vue</p>
                    <div class="flex mb-0 mt-auto">
                        <span class="text-sm text-dark font-light">
                            3:40 min
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection