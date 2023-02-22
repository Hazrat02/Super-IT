{{-- admin --}}

@if (Auth::user()->role == '1')
    @include('user\parsials\deshbord')
@else
    @if (Auth::user()->role == '0')
        @include('admin\deshbord')
    @else
        @include('user\parsials\deshbord')

    @endif



@endif
