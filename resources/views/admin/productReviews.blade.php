@extends('layouts/app')
@section('mainaria')
    <div class=" mt-0 text-center content-wrapper overflow-auto">
        <div>
            <h1 style="
            color: #090979;" class="font-italic">All Reviews Here</h1>
            <h4>total Reviews:{{ $reviews->count() }}</h4>
        </div>
        <table class="table table-striped">

            <thead>
                <tr>
                    <th>Action</th>
                    <th>Reviews</th>
                    <th>Product ID</th>
                    <th>vendor-id</th>
                    <th>Reting *</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>comment</th>
                 
                </tr>
            </thead>
            <tbody>
                @foreach ($reviews as $item)
                   


                    <tr>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a href="{{route('productdelete',['id'=>$item->id])}}"><i class='fas fa-trash-alt' style='color:red'></i></a>
                                <a href="{{route('views.product',['id' => $item->product_id])}}"><i class='fas fa-eye'></i></a>
                            </div>

                        </td>
                        <td>#{{ $item->id }}</td>
                        <td>#{{ $item->product_id }}</td>
                        <td>#{{ $item->user_id }}</td>
                        <td>*{{ $item->reting }}</td>
                        
                        <td>{{ Str::limit($item->name, '20') }}</td>

                     
                        <td>{{ Str::limit($item->email, '20') }}</td>
                        <td>{{ Str::limit($item->comment, '20') }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
