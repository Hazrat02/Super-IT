@extends('user\deshboard\app2')
@section('content')
    <div class="mt-4" id="account-details">
        <div class="icon-box icon-box-side icon-box-light">
            <span class="icon-box-icon icon-account mr-2">
                <i class="w-icon-user"></i>
            </span>
            <div class="icon-box-content">
                <h4 class="icon-box-title mb-0 ls-normal">Account Details</h4>
            </div>
        </div>
         
        <form class="form account-details-form" action="{{route('acountdetails')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="d-flex justify-content-center">

                <img style="width: 100px ;border-radius: 100% ;position: relative;"
                    src="@if (isset(Auth::user()->socialite_id)) {{ Auth::user()->profile_photo_path }}
                        @else
                        
                        @if (isset(Auth::user()->profile_photo_path))

                            {{ asset('storage\profile') }}\{{ Auth::user()->profile_photo_path }}
                            @else
                            https://cdn-icons-png.flaticon.com/512/149/149071.png @endif 
                            @endif"
                    alt="profile">
                <label for="profile_photo_path" style="position: absolute; width: 40px ;color: aqua;"><i
                        class='far fa-edit'></i></label>
                <input type="file" class="d-none" name="profile_photo_path" id="profile_photo_path"/>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">Name *</label>
                        <input type="text" id="firstname" name="name" value="{{ auth()->user()->name }}"
                            class="form-control form-control-md">
                    </div>
                </div>

            </div>



            <div class="form-group mb-6">
                <label for="email_1">Email address *</label>
                <input type="email" id="email_1" name="email" value="{{ auth()->user()->email }}"
                    class="form-control form-control-md">
            </div>


            <div class="form-group">
                <label class="text-dark" for="cur-password">Current Password leave blank to
                    leave unchanged</label>
                <input type="password" class="form-control form-control-md" id="cur-password" name="cur_password">
            </div>

            <button type="submit" class="btn btn-dark btn-rounded btn-sm mb-4">Save
                Changes</button>
        </form>
    </div>
@endsection
