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
    <form class="form account-details-form" action="#" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">Name *</label>
                    <input type="text" id="firstname" name="name" value="{{auth()->user()->name}}"
                        class="form-control form-control-md">
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="lastname">Last name *</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Doe"
                        class="form-control form-control-md">
                </div>
            </div> --}}
        </div>

        {{-- <div class="form-group mb-3">
            <label for="display-name">Display name *</label>
            <input type="text" id="display-name" name="display_name" placeholder="John Doe"
                class="form-control form-control-md mb-0">
            <p>This will be how your name will be displayed in the account section and in
                reviews</p>
        </div> --}}

        <div class="form-group mb-6">
            <label for="email_1">Email address *</label>
            <input type="email" id="email_1" name="email" value="{{auth()->user()->email}}"
                class="form-control form-control-md">
        </div>

        
        <div class="form-group">
            <label class="text-dark" for="cur-password">Current Password leave blank to
                leave unchanged</label>
            <input type="password" class="form-control form-control-md" id="cur-password"
                name="cur_password">
        </div>
       
        <button type="submit" class="btn btn-dark btn-rounded btn-sm mb-4">Save
            Changes</button>
    </form>
</div>

@endsection
