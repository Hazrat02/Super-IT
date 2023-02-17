{{-- admin --}}

@if (Auth::user()->role == '1')
    @include('user\parsials\home')
@else
    @if (Auth::user()->role == '0')
        @extends('layouts/app')
        @section('mainaria')
            @include('admin.home')
        @endsection
    @else
        @include('user\parsials\deshbord')

    @endif



@endif
