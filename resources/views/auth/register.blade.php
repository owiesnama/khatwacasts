@extends('layouts.auth')

@section('content')
    <div class="w-88 mx-auto">
        <div class="shadow">
            <div class="card-header">{{ __('Register') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">

                        <div class="col-md-6 mb-4">
                            <input id="name"
                                   placeholder="name"
                                   type="text"
                                   class="input @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-md-6 mb-4">
                            <input id="email"
                                   placeholder="email address"
                                   type="email"
                                   class="input  @error('email') is-invalid @enderror"
                                   name="email"
                                   value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-md-6 mb-4">
                            <input id="password"
                                   placeholder="Password"
                                   type="password"
                                   class="input  @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 mb-4">
                            <input id="password-confirm"
                                   type="password"
                                   placeholder="password confirmation"
                                   class="input "
                                   name="password_confirmation"
                                   required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 mb-4 offset-md-4">
                            <button type="submit"
                                    class="button">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
