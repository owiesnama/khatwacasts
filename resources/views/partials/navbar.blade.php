<nav class="section py-6 mb-8 border-b border-solid border-gray-200">
    <div class="flex justify-between">
        <h1>
            <a href="{{url('/')}}">KhatwaCasts</a>
        </h1>
        @guest
        <div class="">
            <a href="{{route('login')}}" class="capitalize px-2 py-1 text-center text-blue-800 hover:text-gray-800">
                Login
            </a>
            <a href="{{route('register')}}" class="capitalize px-2 py-1 text-center text-blue-800 hover:text-gray-800">
                Register
            </a>
        </div>
        @endguest
        @auth
        <div class="">
            <form action="{{url('logout')}}"
                  method="post"
            >
                @csrf
                <button class="capitalize px-2 py-1 text-center text-blue-800 hover:text-gray-800">
                    logout
                </button>
            </form>
        </div>
        @endauth
    </div>
</nav>