<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Khatwa casts') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <!--Import Fontawesome Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans text-black">
<div id="app">
    <nav class="section py-6 mb-8">
        <h1 class="font-bold text-indigo-900">KhatwaCasts</h1>
    </nav>
    <div class="section">
        <div class="container">
            <div class="lg:flex">
                <aside class="lg:w-64 lg:pt-8 flex-no-shrink mb-10 lg:mb-0 border-r mr-8">
                    <section class="mb-10">
                        <h4 class="uppercase text-indigo-900 font-bold mb-5 text-base">General</h4>
                        <ul class="list-reset">
                            <li class="text-sm leading-loose">
                                <a href="{{url('admin/podcasts')}}" class="font-hairline py-2 text-indigo-800">Podcasts</a>
                            </li>
                            <li class="text-black">
                                <a href="{{url('admin/users')}}" class="font-hairline py-2 text-indigo-800">Users</a>
                            </li>
                        </ul>
                    </section>
                </aside>

                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

</div>
</body>
</html>
