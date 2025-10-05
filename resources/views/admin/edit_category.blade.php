<!DOCTYPE html>
<html>

<head>
    @include('admin.head')
    <style>
        input[type='text'] {
            width: 300px;
            height: 30px;
        }

        /* .div_degsin {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px;
        } */

        .table_degsin {
            text-align: center;
            margin: auto;
            border: 2px solid yellowgreen;
            margin-top: 50px;
            width: 600px;
        }

        th {
            background-color: skyblue;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        td {
            color: white;
            padding: 10px;
            border: 1px solid skyblue;
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
                    <h2 style="color: white">Edit Category</h2>
                    <div class="div_degsin">
                        <form action="{{ url('update_category', $datas->id) }}" method="POST">
                            @csrf
                            <div>
                                <input type="text" name="Up_category" value="{{ $datas->category_name }}">
                                <input type="submit" value="Update Category" class="btn btn-primary">

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
