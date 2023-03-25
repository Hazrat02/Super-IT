@extends('layouts/app')
@section('mainaria')
    <div class=" mt-0 text-center content-wrapper overflow-auto">
        <div>
            <h1 style="
            color: #090979;" class="font-italic">All Order Here</h1>
            <h4>total Order:{{ $order->count() }}</h4>
        </div>
        <table class="table table-striped">

            <thead>
                <tr>
                    <th class="order-id">Order id</th>
                    <th class="order-date">Date</th>
                    <th class="order-status">Status</th>

                    <th class="order-total">Total</th>
                    <th class="order-actions">Actions</th>
                </tr>
            </thead>
            <tbody>




                @foreach ($order as $item)
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
                        <td class="order-id">#{{ $item->id }}</td>
                        <td class="order-date">{{ $item->created_at }}</td>
                        <td class="order-status">{{ $item->status }}</td>

                        <td class="order-total">
                            <span class="order-price">${{ $item->amount }}</span> for
                            <span class="order-quantity"> {{ $item->orderitem->count() }}</span> item
                        </td>
                        <td class="order-action">
                             <div class="d-flex justify-content-evenly">
                                <a href="{{route('orderdelete', ['id' => $item->id])}}"><i class='fas fa-trash-alt' style='color:red'></i></a>
                                <a href=""><i class='fas fa-edit' style='color:rgb(43, 204, 204)'></i></a>
                                <a href="{{route('orderview', ['id' => $item->id])}}"><i class='fas fa-eye'></i></a>
                            </div>
                            
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>













@endsection
