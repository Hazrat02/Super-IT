@extends('layouts.app')

@section('mainaria')

    <div class="  mt-0 text-center content-wrapper overflow-auto  content-wrapper ">
        <div>
            <h1 style="
        color: #090979;" class="font-italic">All User Money</h1>
            <h4>total user:{{ $money->count() }}</h4>
            <h4>total balance:{{$money->sum('balance')}}$
                <p>{{$page}}</p>

                </h4>
        </div>
        <table class="table table-striped">
            @isset($data)
                @foreach ($data as $item)
                    {{ $item->msg }}
                @endforeach
            @endisset



            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">acount</th>
                    <th scope="col">balance</th>
                    <th scope="col">Ip</th>

                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($money as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>
                            {{ $row->acount}}

                        </td>
                        <td>{{ $row->balance }}$</td>
                        <td>{{ $row->ip }}</td>
                       
                        <td class="d-flex justify-content-evenly">
                            <form action="{{ route('user.delete') }}" method="POST">
                                @csrf
                                <input type="hidden" name="destroy" value="{{ $row->id }}">
                                <button type="submit" class="btn btn-danger">Delete</button>

                            </form>
                            <form action="{{ route('user.edit') }}" method="POST">
                                @csrf
                                <input type="hidden" name="update" value="{{ $row->id }}">
                                <button type="submit" class="btn btn-outline-success">Edit</button>

                            </form>
                        </td>

                    </tr>
                    <br>
                @endforeach

   
            </tbody>

        </table>


    </div>
@endsection
