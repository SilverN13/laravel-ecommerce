<!DOCTYPE html>
<html>

<head>
    @include('admin.head')

    <style>
        .degsin {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        h2 {
            color: white;
        }

        label {
            display: inline-block;
            width: 100px;
            font-size: 16px !important;
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
                    <h2>Add Product</h2>
                    <div class="degsin">
                        <form action="{{ url('upload_product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="div_degsin">
                                <label>Tilte</label>
                                <input type="text" name="title" required>
                            </div>
                            <div class="div_degsin">
                                <label>Description</label>
                                <textarea name="description"></textarea>
                            </div>
                            <div class="div_degsin">
                                <label>Price</label>
                                <input type="text" name="price">
                            </div>

                            <div class="div_degsin">
                                <label>Quantity</label>
                                <input type="number" name="qty">
                            </div>

                            <div class="div_degsin">
                                <label> Category</label>
                                <select name="category" required>
                                    <option value="">Select an Option</option>
                                    @foreach ($cat as $cat)
                                        <option value="{{ $cat->category_name }}">{{ $cat->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="div_degsin">
                                <label> Image</label>
                                <input type="file" name="image">
                                <div>

                                    <div class="div_degsin">
                                        <input class="btn btn-success" type="submit" value="Add Product">
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
