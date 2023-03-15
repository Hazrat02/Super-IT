
@extends('user\deshboard\app2')
@section('content')



<div  class=" mt-4 mb-4" id="account-orders">
    <div class="icon-box icon-box-side icon-box-light">
        <span class="icon-box-icon icon-orders">
            <i class="w-icon-orders"></i>
        </span>
        <div class="icon-box-content">
            <h4 class="icon-box-title text-capitalize ls-normal mb-0">Orders manage</h4>
        </div>
    </div>

    <table class="shop-table account-orders-table mb-6">
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
            <tr>
                <td class="order-id">#{{$item->order->id}}</td>
                <td class="order-date">{{$item->created_at}}</td>
                <td class="order-status">{{$item->order->status}}</td>
                
                <td class="order-total">
                    <span class="order-price">${{$item->subtotal}}</span> for
                    <span class="order-quantity"> {{$item->quantity}}</span> quantity
                </td>
                <td class="order-action">
                    <a href="{{route('orderview',['id'=>$item->order->id])}}"
                        class="btn btn-outline btn-default btn-block btn-sm btn-rounded">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('home')}}" class="btn btn-dark btn-rounded btn-icon-right">Go
        Shop<i class="w-icon-long-arrow-right"></i></a>
</div>
@endsection
