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

        .t_degsin {
            border: 2px solid #a7a5a5;
        }

        th {
            /* background-color: skyblue; */
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 16px;
            border: 1px solid #7f7b7b
        }

        td {
            border: 1px solid #7f7b7b;
            text-align: center;
            color: white;
        }

        input[type="search"] {
            margin-left: 40px;
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

                    <form action="{{ url('search_product') }}" method="GET">
                        @csrf
                        <input type="search" name="search">
                        <input type="submit" class="btn btn-secondary" value="🔍">
                    </form>

                    <div class="degsin">

                        <table class="t_degsin">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                                <th></th>
                            </tr>
                            @foreach ($products as $product)
                                <tr>

                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>
                                        <img height="150" width="150" src="products/{{ $product->image }}"
                                            alt="">
                                    </td>
                                    <td>
                                        <a href="{{ url('edit_product', $product->id) }}" class="btn btn-info">Edit</a>

                                        <a href="{{ url('delete_product', $product->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>
                            @endforeach
                        </table>

                    </div>

                </div>
                <div class="d-flex justify-content-center p-2">
                    {{ $products->onEachSide(1)->links() }}
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
