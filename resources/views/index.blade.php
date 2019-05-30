@extends('layouts.app')
@section('content')
    <podcasts inline-template
    >
        <div class="container mx-auto">
            <div v-for="podcast in podcasts"
                 class="p-4 mb-8 rounded-lg shadow">
                <div class="py-3 px-1 flex">
                    <div class="rounded-full md:h-24 md:w-24 xs:h-16 xs:w-16 p-1 border border-solid border-pink-600">
                        <img src="/images/thumbnail.jpg"
                             class="rounded-full w-full h-full"
                             alt="thumbnail">
                    </div>
                    <div class="flex flex-col w-full justify-center ml-1 p-1">
                        <h4>
                            <a :href="'/podcasts/'+ podcast.id"
                               class="text-blue-800" v-text="podcast.title"></a>
                        </h4>
                        <p class="font-light text-gray-500" v-text="podcast.description"></p>

                        <div class="flex mb-0 mt-auto justify-between">
                        <span class="text-sm text-dark font-light">
                            33:55
                        </span>
                            <like-button></like-button>
                        </div>
                    </div>
                </div>
            </div>

            <Infinite-Loading spinner="spiral"
                              :distance="10"
                              ref="loadMore"
            @infinite="loadMore">
            <div slot="no-more">No more message</div>
            <div slot="no-results">No results message</div>
            </Infinite-Loading>
        </div>

    </podcasts>
@endsection