<div class="cart-overlay"></div>
<a href="#" class="cart-toggle label-down link">
    <i class="w-icon-cart">
        <span class="cart-count">{{ $addtocard->count() }}</span>
    </i>
    <span class="cart-label">Cart</span>
</a>

<div class="dropdown-box">
    <div class="products">
        @foreach ($addtocard->take(3) as $item)
            <div class="product product-cart">
                <div class="product-detail">
                    <h3 class="product-name">
                        <a href="product-default.html">{{ $item->product->product_name }}</a>

                    </h3>




                    <div class="price-box">
                        <span class="product-quantity">{{ $item->quantity }}</span>
                        <span class="product-price">{{ $item->product->price }}</span>

                        <span class="ml-1">=</span>


                        <span class="product-price">{{ $item->total_price }}</span>
                    </div>
                </div>
                <figure class="product-media">
                    <a href="#">
                        @if (strpos($item->product->photo, '|') !== false)
                            @php
                                $photo = Str::afterLast($item->product->photo, '|');
                                
                            @endphp
                        @else
                            @php
                                $photo = $item->product->photo;
                                
                            @endphp
                        @endif
                        <img src="{{ asset('product')  }}\{{$photo}}" alt="product" height="84" width="94" />
                    </a>
                </figure>
                <form action="{{route('card.remove')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">
                <button  type="submit" class="btn btn-link btn-close" aria-label="button">
                    <i class="fas fa-times"></i>
                </button>
            </form>
            </div>
            
        @endforeach
    </div>

    <div class="cart-total">
        <label>Subtotal:</label>
        <span class="price">{{$addtocard->sum('total_price')}}</span>
    </div>

    <div class="cart-action">
        <a href="{{route('card')}}" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
        <a href="{{route('checkout')}}" class="btn btn-primary  btn-rounded">Checkout</a>
    </div>
</div>
