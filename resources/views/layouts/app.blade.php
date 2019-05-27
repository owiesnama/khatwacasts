<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="blue grey lighten-4">
<div id="app">
    @include('partials.navbar')

    <div class="section">
        <div class="container">
            <div class="lg:flex">
                <aside class="lg:w-64 lg:pt-8 flex-no-shrink mb-10 lg:mb-0 lg:border-r mr-8">
                    <section class="mb-10 sm:text-center lg:text-left">
                        <h4 class="uppercase text-indigo-900 font-bold mb-5 text-base">library</h4>
                        <ul class="list-reset">
                            @auth
                            <li class="text-sm leading-loose">
                                <a href="{{url(auth()->user()->name.'/likes')}}"
                                   class="font-hairline py-2 text-indigo-800 capitalize">likes</a>
                            </li>
                            @endauth
                            @guest
                            <li class="text-sm leading-loose">
                                <a @click.prevent="$modal.show('signup')"
                                   href="#"
                                   class="font-hairline py-2 text-indigo-800 capitalize">likes</a>
                            </li>
                            @endguest
                            <li class="text-black">
                                <a href="{{url('/trending')}}" class="font-hairline py-2 text-indigo-800 capitalize">Trending</a>
                            </li>
                        </ul>
                    </section>
                </aside>

                <main>
                    @yield('content')
                </main>
                @include('partials.modals.signup')
            </div>
        </div>
    </div>
</div>
</body>
</html>
