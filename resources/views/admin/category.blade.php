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
            border: 2px solid #a7a5a5;
            margin-top: 50px;
            width: 600px;
        }

        th {
            /* background-color: #00032A; */
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            border: 1px solid #7f7b7b;
        }

        td {
            color: rgb(188, 183, 183);
            padding: 10px;
            border: 1px solid #7f7b7b;
        }

        /* .a {
            color: white;

        } */
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
                    <h2 style="color: white">Add Category</h2>
                    <div class="div_degsin">
                        <form action="{{ url('add_category') }}" method="POST">
                            @csrf
                            <div>
                                <input type="text" name="category">
                                <input type="submit" value="Add Category" class="btn btn-primary">

                            </div>
                        </form>
                    </div>
                    <div>
                        <table class="table_degsin">
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th></th>
                            </tr>
                            @foreach ($datas as $data)
                                <tr>

                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->category_name }}</td>

                                    <td>
                                        <a class="btn btn-info" href="{{ url('edit_category', $data->id) }}">Edit</a>

                                        <a class="btn btn-danger"
                                            href="{{ url('delete_category', $data->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
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
