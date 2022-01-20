@extends('structure')
@section('content')
  
<style>
            #myCarousel .carousel-item .mask {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-attachment: fixed;
        }

        .img-container img {
            width: 40vw;
        }

        #myCarousel h4 {
            font-size: 5vw;
            margin-bottom: 15px;
            color: #FFF;
            line-height: 100%;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        #myCarousel p {
            font-size: 18px;
            margin-bottom: 15px;
            color: #d5d5d5;
        }

        #myCarousel .carousel-item a {
            background: #F47735;
            font-size: 14px;
            color: #FFF;
            padding: 13px 32px;
            display: inline-block;
        }

        #myCarousel .carousel-item a:hover {
            text-decoration: none;
        }

        #myCarousel .carousel-item h4 {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft;
        }

        #myCarousel .carousel-item p {
            -webkit-animation-name: slideInRight;
            animation-name: slideInRight;
        }

        #myCarousel .carousel-item a {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
        }

        #myCarousel .carousel-item .mask img {
            -webkit-animation-name: slideInRight;
            animation-name: slideInRight;
            display: block;
            height: auto;
            max-width: 100%;
        }

        #myCarousel h4,
        #myCarousel p,
        #myCarousel a,
        #myCarousel .carousel-item .mask img {
            -webkit-animation-duration: 1s;
            animation-duration: 1.2s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        #myCarousel .container {
            max-width: 1430px;
        }

        #myCarousel .carousel-item {
            height: 100%;
            min-height: 550px;
        }

        #myCarousel {
            position: relative;
            z-index: 1;
        }

        .carousel-indicators {
            position: absolute;
            top: 28vw;
        }

        .carousel-control-next,
        .carousel-control-prev {
            height: 40px;
            width: 40px;
            padding: 12px;
            top: 15vw;
            bottom: auto;
            transform: translateY(-50%);
            background-color: #979797;
        }


        .carousel-item {
            position: relative;
            display: none;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            transition: -webkit-transform .6s ease;
            transition: transform .6s ease;
            transition: transform .6s ease, -webkit-transform .6s ease;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-perspective: 1000px;
            perspective: 1000px;
        }

        .carousel-fade .carousel-item {
            opacity: 0;
            -webkit-transition-duration: .6s;
            transition-duration: .6s;
            -webkit-transition-property: opacity;
            transition-property: opacity
        }

        .carousel-fade .carousel-item-next.carousel-item-left,
        .carousel-fade .carousel-item-prev.carousel-item-right,
        .carousel-fade .carousel-item.active {
            opacity: 1
        }

        .carousel-fade .carousel-item-left.active,
        .carousel-fade .carousel-item-right.active {
            opacity: 0
        }

        .carousel-fade .carousel-item-left.active,
        .carousel-fade .carousel-item-next,
        .carousel-fade .carousel-item-prev,
        .carousel-fade .carousel-item-prev.active,
        .carousel-fade .carousel-item.active {
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0)
        }

        @supports (transform-style:preserve-3d) {

            .carousel-fade .carousel-item-left.active,
            .carousel-fade .carousel-item-next,
            .carousel-fade .carousel-item-prev,
            .carousel-fade .carousel-item-prev.active,
            .carousel-fade .carousel-item.active {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        .carousel-fade .carousel-item-left.active,
        .carousel-fade .carousel-item-next,
        .carousel-fade .carousel-item-prev,
        .carousel-fade .carousel-item-prev.active,
        .carousel-fade .carousel-item.active {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }



        @-webkit-keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        .fadeInLeft {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft;
        }

        @-webkit-keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        .fadeInUp {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
        }

        @-webkit-keyframes slideInRight {
            from {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes slideInRight {
            from {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        .slideInRight {
            -webkit-animation-name: slideInRight;
            animation-name: slideInRight;
        }

        #s1 {
            background: linear-gradient(red, white);
        }

        #s2 {

            background: linear-gradient(blue, white);
        }

        #s3 {
            background: linear-gradient(orange, white) ;
        }
</style>



    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active" id="s1">
                <div class="mask flex-center">
                    <div class="container">
                        <div class=" d-flex justify-content-between">
                            <div class="">
                                <h4>Present your <br>
                                    awesome product</h4>
                                <p>Lorem ipsum dolor sit amet. </p>
                                <a href="#">BUY NOW</a>
                            </div>
                            <div class="pt-5vw img-container">
                                <img src="images\sl4.png" class="mx-auto"
                                    alt="asd"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" id="s2">
                <div class="mask flex-center">
                    <div class="container">
                        <div class=" d-flex justify-content-between">
                            <div class="">
                                <h4>Present your <br>
                                    awesome product</h4>
                                <p>Lorem ipsum dolor sit amet. </p>
                                <a href="#">BUY NOW</a>
                            </div>
                            <div class="img-container"><img src="images\sl1.png" class="mx-auto"
                                    alt="asddd"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item " id="s3">
                <div class="mask flex-center">
                    <div class="container">
                        <div class=" d-flex justify-content-between">
                            <div class="">
                                <h4>Present your <br>
                                    awesome product</h4>
                                <p>Lorem ipsum dolor sit amet. </p>
                                <a href="#">BUY NOW</a>
                            </div>
                            <div class="img-container"><img src="images\sl2.png" class="mx-auto"
                                    alt="dddd"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span
                class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span
                class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
    </div>
    <div class="home-page-container"><h1>HEEEE</h1></div>
<!-- Footer -->
<?php 

use App\Http\Controllers\ProductController;
    $total=0;
    if(Session::has('user')){
    $total=ProductController::cartItem();
    }
?>
<footer class=" text-center text-lg-start bg-light text-dark">
    <!-- Section: Social media -->
    <a href="/cartlist" class="btn btn-success">Cart {{$total}}</a>
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom socialNetworks">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fa fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fa fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fa fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fa fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class=" text-center text-md-start mt-5">
            <!-- Grid  -->
            <div class=" mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Company name
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Angular</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">React</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Vue</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Laravel</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                    </h6>
                    <p><i class="fa fa-home me-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fa fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fa fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fa fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid  -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>

<script>
</script>
@endsection
