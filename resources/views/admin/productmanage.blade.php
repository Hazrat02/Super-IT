@extends('layouts/app')
@section('mainaria')
    <div class=" mt-0 text-center content-wrapper overflow-auto">
        <div>
            <h1 style="
            color: #090979;" class="font-italic">All Product Here</h1>
            <h4>total Product:{{ $product->count() }}</h4>
        </div>
        <table class="table table-striped">

            <thead>
                <tr>
                    <th>Action</th>
                    <th>Product ID</th>
                    <th>Photo</th>
                    <th>Product Name</th>
                    <th>Price</th>

                    <th>Category</th>
                    <th>Title</th>
                    <th>Discount</th>
                    <th>Description</th>
                    <th>Delivery Fee</th>
                    <th>Views</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $item)
                    @if (strpos($item->photo, '|') !== false)
                        @php
                            $photo = Str::afterLast($item->photo, '|');
                            
                        @endphp
                    @else
                        @php
                            $photo = $item->photo;
                            
                        @endphp
                    @endif


                    <tr>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a href="{{route('productdelete',['id'=>$item->id])}}"><i class='fas fa-trash-alt' style='color:red'></i></a>
                                <a href="{{route('productedit',['id' => $item->id])}}"><i class='fas fa-edit' style='color:rgb(43, 204, 204)'></i></a>
                                <a href="{{route('views.product',['id' => $item->id])}}"><i class='fas fa-eye'></i></a>
                            </div>

                        </td>
                        <td>#{{ $item->id }}</td>

                        <td class="Container"><img style="width: 50px" class="Container"
                                src="{{ asset('product') }}\{{$photo}}">
                        </td>
                        <td>{{ Str::limit($item->product_name, '20') }}</td>

                        <td>${{ $item->price }}</td>
                        <td>{{ Str::limit($item->category, '20') }}</td>
                        <td>{{ Str::limit($item->title, '20') }}</td>
                        <td>${{ $item->discount }}</td>

                        <td>{{ Str::limit($item->discription, '20') }}</td>
                        <td>${{ $item->delivery_fee }}</td>

                        <td>{{ $item->views }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
