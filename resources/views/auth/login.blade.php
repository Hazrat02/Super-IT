@extends('user\layouts\app')


<!--=========================================header=============-->
<!-- Section: Design Block -->

@section('usermain')
    <section class="background-radial-gradient overflow-hidden content-wrapper">
        <style>
            .background-radial-gradient {


                background-color: #D9AFD9;


                background-image: linear-gradient(300deg, #97ABFF 10%, #000000 100%)
            }

            #radius-shape-2 {
                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                bottom: -60px;
                right: -110px;
                width: 300px;
                height: 300px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;

            }

            #radius-shape-3 {
                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                bottom: -60px;
                left: -110px;
                width: 300px;
                height: 300px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;

            }

            #radius-shape-4 {
                height: 270px;
                width: 700px;
                top: -100px;
                left: -92px;
                background: radial-gradient(#866798, #d5aeec);
                overflow: hidden;
            }


            .bg-glass {
                background-color: hsla(188, 82%, 85%, 0.745) !important;
                backdrop-filter: saturate(200%) blur(25px);

            }
        </style>


        <div class="container  px-4 py-5 px-md-5 text-center text-lg-start my-5">

            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10 ; height: 50vw;">
                    <h1 class="my-2 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        The best offer <br />
                        <span style="color: hsl(218, 81%, 75%);">for your business</span>
                    </h1>
                    <p class="mb-4 opacity-60" style="color: hsl(218, 81%, 85%)">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative ">
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-3" class="position-absolute shadow-5-strong"></div>
                    <div id="radius-shape-4" class="position-absolute rounded-circle shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <h1 class="mb-4 mb-lg-4 text-center">
                                log in
                            </h1>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>

                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="justify-content-center " method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Email input -->

                                <div class="form-outline mb-4">
                                    <input name="email" placeholder="Enter Your Email" value="{{ old('email') }}"
                                        type="email" id="form3Example3" class="form-control" required />
                                    <label class="form-label" for="form3Example3">Email address</label>
                                </div>

                                <!-- Password input -->
                                {{-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" --}}
                                <div class="form-outline mb-4">
                                    <input name="password" placeholder="******" type="password" id="form3Example4"
                                        class="form-control @error('password') is-invalid @enderror" required />

                                    <div class=" d-flex  " style="justify-content: space-between">
                                        <label class="form-label " for="form3Example4">password</label>
                                        <a href="{{ route('password.request') }}"
                                            style="color:cadetblue;cursor:pointer;  text-decoration: underline; ">forget
                                            password</p>
                                    </div>

                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>



                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2 " type="checkbox" value="" id="form2Example33"
                                        required />
                                    <p><a href="">Read all team.</a>Uderested?</p>
                                </div>

                                <!-- Submit button -->
                                <div class="container container-fluid justify-content-center">
                                    <button type="submit" class="btn btn-primary d-block px-4 container-fluid mb-4">
                                        log in
                                    </button>
                                </div>
                                <div>
                                    Haven't any account / <a href="{{ route('register') }}">sing in</a>
                                </div>
                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>or log in with:</p>
                                    <button type="button" class="btn btn-link btn-floating btn-outline-info mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <a href="{{ route('log.google') }}" type="button"
                                        class="btn btn-link btn-floating btn-outline-info mx-1">
                                        <i class="fab fa-google"></i>
                                    </a>

                                    <a href="{{ route('log.fb') }}" type="button"
                                        class="btn btn-link btn-floating btn-outline-info mx-1">
                                        <i class="fab fa-facebook"></i>
                                    </a>

                                    <a href="{{ route('log.github') }}" type="button"
                                        class="btn btn-link btn-outline-info mx-1">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection


<!-- Section: Design Block -->







{{-- 

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password"
                 name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
