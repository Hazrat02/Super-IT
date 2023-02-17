{{-- 
 <form class="justify-content-center " method="POST" action="{{ route('register') }}">
    @csrf
    <!-- Email input -->


    <div class="form-outline mb-4">
        <input name="password" placeholder="Enter Your password" value=""
            type="password" id="form3Example3" class="form-control" required />
        <label class="form-label" for="form3Example3">Password</label>
    </div>
    <div class="form-outline mb-4">
        <input name="password_confirmation" placeholder="Enter Your password" value="{{ old('email') }}"
            type="password" id="form3Example3" class="form-control" required />
        <label class="form-label" for="form3Example3">confirmation Password</label>
    </div>

    <input type="hidden" value="{{$googleUser->email}}" name="email"/>
    <input type="hidden"  name="role" value="{{1}}"/>
    <input type="hidden" value="{{$googleUser->name}}" name="name"/>
    <input type="hidden" value="{{$googleUser->avatar}}" name="profile_photo_path"/>



    <div class="container container-fluid justify-content-center">
        <button type="submit" class="btn btn-primary d-block px-4 container-fluid mb-4">
           Login
        </button>
    </div>

    <!-- Register buttons -->

</form> --}}


@extends('user\layouts\app')


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
                        Forgot your password?<br />
                        <span style="color: hsl(218, 81%, 75%);"></span>
                    </h1>
                    <p class="mb-4 opacity-60" style="color: hsl(218, 81%, 75%)">
                        No problem.Follow this way.Just let us know your email address and we will email you a password
                        reset link that will allow you to choose a new one.
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
                                Reset Password
                            </h1>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>

                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="justify-content-center " method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- Email input -->


                                <div class="form-outline mb-4">
                                    <input name="password" placeholder="Enter Your password" value="" type="password"
                                        id="form3Example3" class="form-control" required />
                                    <label class="form-label" for="form3Example3">Password</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input name="password_confirmation" placeholder="Enter Your password"
                                        value="{{ old('email') }}" type="password" id="form3Example3" class="form-control"
                                        required />
                                    <label class="form-label" for="form3Example3">confirmation Password</label>
                                </div>

                                <input type="hidden" value="{{ $googleUser->email }}" name="email" />
                                <input type="hidden" name="role" value="{{ 1 }}" />
                                <input type="hidden" value="{{ $googleUser->name }}" name="name" />
                                <input type="hidden" value="{{ $googleUser->avatar }}" name="social_photo_path" />
                                <input type="hidden" value="{{ $googleUser->id }}" name="socialite_id" />



                                <div class="container container-fluid justify-content-center">
                                    <button type="submit" class="btn btn-primary d-block px-4 container-fluid mb-4">
                                        Login
                                    </button>
                                </div>

                                <!-- Register buttons -->

                            </form>


                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
