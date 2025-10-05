<!DOCTYPE html>
<html>

<head>
    @include('home.head')
    <style>
        .img-center {
            display: flex;
            justify-content: center;
            justify-items: center;
            padding: 20px;
        }

        .detail-box {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->

    </div>
    <!-- end hero area -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Latest Products
                </h2>
            </div>

            <div class="row">

                <div class="col-md-12">
                    <div class="box">

                        <div class="img-center">
                            <img width="400" src="/products/{{ $detail->image }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                {{ $detail->title }}
                            </h6>
                            <h6>
                                Price:
                                <span>
                                    ${{ $detail->price }}
                                </span>
                            </h6>
                        </div>

                        <div class="detail-box">
                            <h6>
                                Category: {{ $detail->category }}
                            </h6>
                            <h6>
                                Available Quantity
                                <span>
                                    {{ $detail->quantity }}
                                </span>
                            </h6>
                        </div>

                        <div class="detail-box">

                            <p>
                                {{ $detail->description }}
                            </p>

                        </div>

                    </div>

                </div>
            </div>

        </div>

        </div>
    </section>


    <!-- info section -->

    @include('home.footer')

    <!-- end info section -->


    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
