
    @if (Auth::user()->role == '0')
        @include('admin\deshbord')
    @else
        @include('user\parsials\deshbord')

    @endif
