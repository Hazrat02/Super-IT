@extends('layouts/app')
@section('mainaria')
    <div class=" content-wrapper p-5">
        <div class="row"><form action="{{ route('producteditStore') }} " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="product_name" name="product_name" required
                            value="{{ $product->product_name }}" class="form-control form-control-lg" />
                        <label class="form-label" for="product_name">Product Name</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" id="title" name="title" required value="{{ $product->title }}"
                            class="form-control form-control-lg" />
                        <label class="form-label" for="title">Title</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="number" id="price" name="price" required value="{{ $product->price }}"
                            class="form-control form-control-lg" />
                        <label class="form-label" for="price">Price</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="number" id="discount" name="discount" required value="{{ $product->discount }}"
                            class="form-control form-control-lg" />
                        <label class="form-label" for="discount">Discount</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">

                    <select name="category" class="form-select" required aria-label="Default select example">


                        <option @if ($product->category == 'fashion') selected @endif value="fashion">Fashion</option>
                        <option @if ($product->category == 'furniture') selected @endif value="furniture">Furniture
                        </option>
                        <option @if ($product->category == 'shoes') selected @endif value="shoes">Shoes</option>
                        <option @if ($product->category == 'sports') selected @endif value="sports">Sports</option>
                        <option @if ($product->category == 'games') selected @endif value="games">Games</option>

                        <option @if ($product->category == 'computers') selected @endif value="computers"> Computers
                        </option>




                        <option @if ($product->category == 'electronics') selected @endif value="electronics">Electronics
                        </option>
                        <option @if ($product->category == 'kitchen') selected @endif value="kitchen">Kitchen</option>
                        <option @if ($product->category == 'clothing') selected @endif value="clothing">Clothing</option>
                    </select>

                </div>
                <div class="col-md-6 mb-4">

                    <div class="mb-4">
                        <div class="form-outline">
                            <input type="number" id="delivery_fee" required name="delivery_fee"
                                value="{{ $product->delivery_fee }}" class="form-control form-control-lg" />
                            <label class="form-label" for="delivery_fee">Delivery fee</label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <textarea type="text" required id="discription" name="discription" class="form-control form-control-lg">{{ $product->discription }}
                                </textarea>
                        {{-- pattern=".{200,}" title="200 or more characters" --}}

                        <label class="form-label" for="discription">Discription</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="file" multiple id="form3Example1n1" name="image[]"
                            class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example1n1">Photo (select multiple)
                        </label>
                    </div>
                </div>
            </div>





            <div class="d-flex justify-content-end pt-3">

                <button type="submit" class="btn btn-outline-dark btn-lg ms-2">Submit form</button>
            </div>
            <input type="hidden" name="id" value="{{ $product->id }}">
        </form></div>
    </div>
@endsection
