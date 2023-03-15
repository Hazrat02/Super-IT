@extends('user\deshboard\app')


@section('maincontent')

<div class="my-account page-wrapper">
    <div class="page-content pt-0 ">
        <div class="container">
            <div class="tab tab-vertical row gutter-lg">


                {{-- sidebar --}}
                <ul style="
                background-color:#CFE5EA ; height: 90vh;
                    "
                    class="nav nav-tabs mb-6 menuhide" role="tablist">
                    @include('user\deshboard\sidebar')
                </ul>
                <div class="tab-content mb-6 ">
                    
                    @yield('content')

                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection
