@extends('layouts.admin')

@section('content')
    <podcasts inline-template
    >
        <div class="" v-cloak>
            <button @click="$modal.show('newPodcast')"
                    class="border mb-4 border-gray-light focus:outline-none hover:bg-gray-300 hover:bg-indigo-900
    hover:text-white rounded-full px-5 py-1 text-sm text-light"
            >
            <span class="flex justify-center align-items-center">
                <span>New Podcast</span>
            </span>
            </button>


            <div v-for="podcast in podcasts"
                 class="relative h-88 mb-6 w-3/5  overflow-hidden text-white rounded shadow">
                <picture class="absolute z-0">
                    <img src="{{asset('images/thumbnail.jpg')}}" alt="">
                </picture>
                <div class="relative h-full flex flex-col z-10 p-2">
                    <header class="flex-1 p-6">
                        <h3 class="text-bold  mb-6 capitalize"
                            v-text="podcast.title"></h3>
                        <p class="text-gray-500"
                           v-text="podcast.description"
                        ></p>
                    </header>

                    <footer class="flex justify-between">
                        <button class="border border-gray-light outline-none hover:bg-gray-300 hover:text-black rounded-full px-5 py-1 text-sm text-light">

                    <span class="flex justify-center align-items-center">
                       <i class="fas fa-play p-1 block"></i>
                        <span>Play</span>
                    </span>
                            {{--<span class="flex justify-center align-items-center">--}}
                            {{--<i class="fas fa-pause p-1 block"></i>--}}
                            {{--<span>Pause</span>--}}
                            {{--</span>--}}
                        </button>

                        <button>
                   <span class="flex justify-center align-items-center">
                       <i class="fas fa-ellipsis-v p-1"></i>
                    </span>
                        </button>
                    </footer>
                </div>
            </div>


            @include('partials.modals.admin.newPodcast')
        </div>
    </podcasts>
@endsection