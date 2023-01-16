@extends('layouts.app')


@section('mainaria')


    <div class="  mt-0 text-center  content-wrapper ">
        <div>
            <h1 style="
            color: #090979;" class="font-italic">All User Here</h1>
            <h4>total user:{{Auth::user()->all()->count()}}</h4>
        </div>
        <table class="table table-striped">
            @isset($data)
                @foreach ($data as $item)
                {{$item->msg}}
                @endforeach
            @endisset
         
            
         
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>

                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userdata as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>
                            @if ($row->role==1)
                                developer
                            @else
                                Admin
                            @endif
                  
                        </td>
                        <td class="d-flex justify-content-evenly">
                            <form action="{{route('user.delete')}}" method="POST">
                                @csrf
                                <input type="hidden" name="destroy" value="{{ $row->id }}">
                                <button type="submit" class="btn btn-danger">Delete</button>
                                
                            </form>
                            <form action="{{route('user.edit')}}" method="POST">
                                @csrf
                                <input type="hidden" name="update" value="{{ $row->id }}">
                                <button type="submit" class="btn btn-outline-success">Edit</button>
                                
                            </form>
                        </td>

                    </tr>
                    <br>
                @endforeach

                {{-- <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr> --}}
            </tbody>
            
        </table>

        <div style=" text-align: center" class=" d-flex justify-content-between">
            <span class=""></span>
            <span style="text-align: center">{{ $userdata->links() }}</span>
        </div>

    </div>
@endsection
