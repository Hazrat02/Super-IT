@extends('user\layouts\app')
@section('usermain')
    <div class="container-fluid h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block col-md-6 col-sm-6">
                            <img style="height: 80vh;"
                                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                                alt="Sample photo" class="container-fluid ms-0" />
                        </div>
                        <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Post Your Product</h3>
                                <form action="{{route('create.product')}} " method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="product_name" name="product_name" required
                                                    placeholder="product name" class="form-control form-control-lg" />
                                                <label class="form-label" for="product_name">Product Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="title" name="title" required placeholder=" title "
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="title">Title</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="number" id="price" name="price" required placeholder="2$"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="price">Price</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="number" id="discount"   name="discount" required placeholder="5$"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="discount">Discount</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <select name="category" class="form-select" required aria-label="Default select example">
                                                <option disabled selected>Select Category</option>

                                                <option value="fashion">Fashion</option>
                                                <option value="furniture">Furniture</option>
                                                <option value="shoes">Shoes</option>
                                                <option value="sports">Sports</option>
                                                <option value="games">Games</option>
                                                <option value="computers">Computers</option>
                                                <option value="electronics">Electronics</option>
                                                <option value="kitchen">Kitchen</option>
                                                <option value="clothing">Clothing</option>
                                            </select>

                                        </div>
                                        <div class="col-md-6 mb-4">

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="number" id="delivery_fee" required name="delivery_fee"
                                                        placeholder="2$" class="form-control form-control-lg" />
                                                    <label class="form-label" for="delivery_fee">Delivery fee</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input  type="text"  required id="discription" name="discription" placeholder="discription (min-200)"
                                                    class="form-control form-control-lg" />
                                                    {{-- pattern=".{200,}" title="200 or more characters" --}}

                                                <label class="form-label"  for="discription">Discription</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="file" required multiple id="form3Example1n1" name="image[]"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1n1">Photo (select multiple) </label>
                                            </div>
                                        </div>
                                    </div>





                                    <div class="d-flex justify-content-end pt-3">

                                        <button type="submit" class="btn btn-outline-dark btn-lg ms-2">Submit form</button>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}" >
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
