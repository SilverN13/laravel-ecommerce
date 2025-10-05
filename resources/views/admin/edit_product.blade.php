<!DOCTYPE html>
<html>

<head>
    @include('admin.head')
    <style>
        .design {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        label {
            display: inline-block;
            width: 100px;
            padding: 10px;
        }

        textarea {
            width: 350px;
            height: 80px;
        }

        .div_degsin {
            padding: 15px;
        }
    </style>
</head>

<body>
    <!--Header-->
    @include('admin.header')
    <!-- Header end -->
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">

                    <h3>Update Product</h3>
                    <div class="design">
                        <form action="{{ url('update_product', $products->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label>Tile</label>
                                <input type="text" name="title" value="{{ $products->title }}">
                            </div>
                            <div>
                                <label>Description</label>
                                <textarea name="description">{{ $products->description }}</textarea>
                            </div>
                            <div>
                                <label>Category</label>
                                <select name="category">
                                    <option value="{{ $products->category }}">{{ $products->category }}</option>
                                    @foreach ($cat as $cats)
                                        <option>{{ $cats->category_name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div>
                                <label>Price</label>
                                <input type="text" name="price" value="{{ $products->price }}">
                            </div>
                            <div>
                                <label>Quantity</label>
                                <input type="text" name="qty" value="{{ $products->quantity }}">
                            </div>
                            <div>
                                <label>Image</label>
                                <img height="150" width="150" src="/products/{{ $products->image }}"
                                    alt="">
                            </div>

                            <div>
                                <label>New Image</label>
                                <input type="file" name="image">
                            </div>

                            <div class="div_degsin">
                                <input class="btn btn-success" type="submit" value="Update Product">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </section>
    @include('admin.footer')
    </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>

</html>
