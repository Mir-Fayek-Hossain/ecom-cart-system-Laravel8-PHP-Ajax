<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
    <!-- FOR DROP DOWN LOGO IN SIDENAV -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <!--Font Awesome-->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Bootstrap Bundle-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- Jquey Link -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"> </script>
</head>
<style>
    body {
        overflow-x: hidden;
    }

    .sidenav {
        
        height: calc(100% - 60px);
        width: 250px;
        position: fixed;
        z-index: 2;
        top: 66px;
        left: 0;
        background-color: white;
        overflow-x: hidden;
        transition: 0.5s;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    #main-container {
        margin-left: 250px;
        transition: margin-left .5s;
    }


    @keyframes swing {
        0% {
            transform: rotate(0deg);
        }

        10% {
            transform: rotate(10deg);
        }

        30% {
            transform: rotate(0deg);
        }

        40% {
            transform: rotate(-10deg);
        }

        50% {
            transform: rotate(0deg);
        }

        60% {
            transform: rotate(5deg);
        }

        70% {
            transform: rotate(0deg);
        }

        80% {
            transform: rotate(-5deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    .sidebar-menu ul {
        list-style: none;
        padding: 0;
        box-sizing: 0;
    }

    .sidebar-wrapper .sidebar-menu ul li a {
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
        font-size: 15px;
    }

    /*----------------page-wrapper----------------*/

    .page-wrapper {}

    .sidebar-submenu ul .Sub-product:hover {
        background-image: linear-gradient(to right, rgba(255, 255, 255, 0.979), rgba(255, 255, 255, 0.979), rgba(255, 255, 255, 0.979), rgba(233, 219, 219, 0.979), rgba(233, 219, 219, 0.979), rgb(148, 148, 148));

    }

    .sidebar-wrapper .sidebar-menu ul li a {
        display: inline-block;
        width: 100%;
        text-decoration: none;
        position: relative;
        padding: 12px 30px 8px 20px;
    }

    .header-menu {
        background-image: linear-gradient(rgb(240, 208, 122), white, white);
    }

    /* LOGO */
    .sidebar-wrapper .sidebar-menu ul li a:hover>i::before {
        display: inline-block;
    }

    .Sidenav-icons {
        width: 25px;
        height: 25px;
    }

    a:hover>.Sidenav-icons {
        animation: swing ease-in-out 0.5s 1 alternate;
    }

    /* ARROW -------------------- */
    .sidebar-wrapper .sidebar-menu .sidebar-dropdown>a:after {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        content: "\f105";
        font-style: normal;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        background: 0 0;
        position: absolute;
        right: 15px;
    }

    /* SUB */
    .sidebar-wrapper .sidebar-menu .sidebar-submenu {
        display: none;
        margin-left: 15px;
    }

    .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active>a:after {
        transform: rotate(90deg);
        right: 17px;
    }
    .Main-products{cursor: pointer;}

    /*--------------------------page-content-----------------------------*/
    .chiller-theme .sidebar-wrapper {
        background: #ffffff;
        width: 100%;
    }

    .chiller-theme .sidebar-wrapper .sidebar-brand>a,
    .chiller-theme .sidebar-wrapper .sidebar-menu ul li a,
    .chiller-theme .sidebar-footer>a {
        color: #474747;
    }

    .chiller-theme .sidebar-wrapper .sidebar-menu ul li:hover>.Main-products,
    .chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active>.Main-products,
    .chiller-theme .sidebar-wrapper .sidebar-header .user-info,
    .chiller-theme .sidebar-wrapper .sidebar-brand>.Main-products:hover {
        background-image: linear-gradient(to right, rgb(148, 148, 148), rgba(233, 219, 219, 0.979), rgba(233, 219, 219, 0.979), rgba(233, 219, 219, 0.979), rgba(233, 219, 219, 0.979), rgb(148, 148, 148));
        color: #000000;
    }


    .navTrigger {
        width: 20px;
        cursor: pointer;
    }

    .navTrigger i {
        background-color: rgb(226, 179, 25);
        border-radius: 2px;
        content: '';
        display: block;
        width: 100%;
        height: 4px;
    }

    .navTrigger i:nth-child(1) {
        -webkit-animation: outT 0.8s backwards;
        animation: outT 0.8s backwards;
        -webkit-animation-direction: reverse;
        animation-direction: reverse;
    }

    .navTrigger i:nth-child(2) {
        margin: 5px 0;
        -webkit-animation: outM 0.8s backwards;
        animation: outM 0.8s backwards;
        -webkit-animation-direction: reverse;
        animation-direction: reverse;
    }

    .navTrigger i:nth-child(3) {
        -webkit-animation: outBtm 0.8s backwards;
        animation: outBtm 0.8s backwards;
        -webkit-animation-direction: reverse;
        animation-direction: reverse;
    }

    .navTrigger.active i:nth-child(1) {
        -webkit-animation: inT 0.8s forwards;
        animation: inT 0.8s forwards;
    }

    .navTrigger.active i:nth-child(2) {
        -webkit-animation: inM 0.8s forwards;
        animation: inM 0.8s forwards;
    }

    .navTrigger.active i:nth-child(3) {
        -webkit-animation: inBtm 0.8s forwards;
        animation: inBtm 0.8s forwards;
    }

    @-webkit-keyframes inM {
        50% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(45deg);
        }
    }

    @keyframes inM {
        50% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(45deg);
        }
    }

    @-webkit-keyframes outM {
        50% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(45deg);
        }
    }

    @keyframes outM {
        50% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(45deg);
        }
    }

    @-webkit-keyframes inT {
        0% {
            -webkit-transform: translateY(0px) rotate(0deg);
        }

        50% {
            -webkit-transform: translateY(9px) rotate(0deg);
        }

        100% {
            -webkit-transform: translateY(9px) rotate(135deg);
        }
    }

    @keyframes inT {
        0% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(9px) rotate(0deg);
        }

        100% {
            transform: translateY(9px) rotate(135deg);
        }
    }

    @-webkit-keyframes outT {
        0% {
            -webkit-transform: translateY(0px) rotate(0deg);
        }

        50% {
            -webkit-transform: translateY(9px) rotate(0deg);
        }

        100% {
            -webkit-transform: translateY(9px) rotate(135deg);
        }
    }

    @keyframes outT {
        0% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(9px) rotate(0deg);
        }

        100% {
            transform: translateY(9px) rotate(135deg);
        }
    }

    @-webkit-keyframes inBtm {
        0% {
            -webkit-transform: translateY(0px) rotate(0deg);
        }

        50% {
            -webkit-transform: translateY(-9px) rotate(0deg);
        }

        100% {
            -webkit-transform: translateY(-9px) rotate(135deg);
        }
    }

    @keyframes inBtm {
        0% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-9px) rotate(0deg);
        }

        100% {
            transform: translateY(-9px) rotate(135deg);
        }
    }

    @-webkit-keyframes outBtm {
        0% {
            -webkit-transform: translateY(0px) rotate(0deg);
        }

        50% {
            -webkit-transform: translateY(-9px) rotate(0deg);
        }

        100% {
            -webkit-transform: translateY(-9px) rotate(135deg);
        }
    }

    @keyframes outBtm {
        0% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-9px) rotate(0deg);
        }

        100% {
            transform: translateY(-9px) rotate(135deg);
        }
    }

    @media only screen and (min-width: 767px) {
             .sidenav{
      border-right: 2px solid rgb(252, 206, 1);
    
    }
}
    @media only screen and (max-width: 767px) {
        

        #mySidenav {
            width: 0px;
        }

        #main-container {
            margin-left: 0px;
        }
    }

    .navbar {
        position: fixed;
        z-index: 5;
        width: 100%
    }

</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">


        <div class="container-fluid">
            <div onclick="toggleNav()" class="navTrigger" id="navTriggerMobile">
                <i></i><i></i><i></i>
            </div>
            <a class="navbar-brand border border-2 border-warning rounded-1 p-2 e-name " href="/">SODAI.com
            </a>

            <form action="/search" class="form-inline my-2 my-lg-0  w-50 d-flex  p-2 border-warning search-box">

                <input type="search" placeholder="Search" aria-label="Search" name="query">
                <button class="fa fa-search" aria-hidden="true"></button>
            </form>
            <!-- Button trigger modal -->
            @if (session('user'))
            <div class="dropdown">
                <button class="btn btn-warning border-info dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">

                    {{ session('user.name') }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                    <li><a class="dropdown-item" href="/myorders">My Orders</a></li>
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
            </div>
            @endif
            @if (!session('user'))
            <button type='button' class='btn btn-warning border-info' data-bs-toggle='modal'
                data-bs-target='#staticBackdrop'>
                Sign in
            </button>
            @endif
        </div>
    </nav>

    <div id="mySidenav" class="sidenav">
        <div class="page-wrapper chiller-theme toggled">
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                    <!-- sidebar-search  -->
                    <div class="sidebar-menu">
                        <ul>
                            <li class="header-menu">
                                <span>Daily Essentials</span>
                            </li>

                            <li class="sidebar-dropdown">
                                <a class="Main-products" >
                                    <img class="Sidenav-icons"
                                        src="https://img.icons8.com/doodle/48/000000/bookshop.png" />
                                    <span>Home Accessories</span>
                                </a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li>
                                            <a class="Sub-product" href="/hygiene">
                                                <img class="Sidenav-icons"
                                                    src="https://img.icons8.com/plasticine/100/000000/soap-dispenser.png" />
                                                <span>Hygiene</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="Sub-product" href="/Trees">
                                                <img class="Sidenav-icons"
                                                    src="https://img.icons8.com/doodle/48/000000/potted-plant.png" />
                                                <span>Plants</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="Sub-product" href="/Furnitures">
                                                <img class="Sidenav-icons"
                                                    src="https://img.icons8.com/doodle/48/000000/sofa.png" />
                                                <span>Furnitures</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar-dropdown">
                                <a class="Main-products">
                                    <img class="Sidenav-icons"
                                        src="https://img.icons8.com/doodle/48/000000/men-age-group-1.png" />
                                    <span>Baby care</span>
                                </a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li>
                                            <a class="Sub-product" href="/Diapers">
                                                <img class="Sidenav-icons"
                                                    src="https://img.icons8.com/doodle/48/000000/nappy.png" />
                                                <span>Diapers</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="Sub-product" href="/Feeders">
                                                <img class="Sidenav-icons"
                                                    src="https://img.icons8.com/doodle/48/000000/baby-bottle.png" />
                                                <span>Feeders</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar-dropdown">
                                <a class="Main-products">

                                    <img class="Sidenav-icons"
                                        src="https://img.icons8.com/doodle/48/000000/ingredients.png" />
                                    <span>Food</span>
                                </a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li>
                                            <a class="Sub-product" href="/Meats">
                                                <img class="Sidenav-icons"
                                                    src="https://img.icons8.com/doodle/48/000000/baby-bottle.png" />
                                                <span>Meat & Fish</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="Sub-product" href="/Beverages">
                                                <img class="Sidenav-icons"
                                                    src="https://img.icons8.com/doodle/48/000000/starbucks.png" />
                                                <span>Beverages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-menu">
                                <span>Fashion</span>
                            </li>
                            <li class="sidebar-dropdown">
                                <a class="Main-products" >
                                    <img class="Sidenav-icons"
                                        src="https://img.icons8.com/doodle/50/000000/jumper.png" />
                                    <span>Men's collection</span>
                                </a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li>
                                            <a class="Sub-product" href="/Clothings">
                                                <img class="Sidenav-icons"
                                                    src="https://img.icons8.com/doodle/48/000000/t-shirt.png" />
                                                <span>TOP</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="Sub-product" href="/Shoes">
                                                <img class="Sidenav-icons"
                                                    src="https://img.icons8.com/doodle/48/000000/fireman-boots.png" />
                                                <span>Shoes</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar-dropdown">
                                <a class="Main-products" >
                                    <img class="Sidenav-icons"
                                        src="https://img.icons8.com/plasticine/100/000000/dress-back-view.png" />
                                    <span>Women's collection</span>
                                </a>
                                <div class="sidebar-submenu">
                                    <ul>
                                        <li>
                                            <a class="Sub-product" href="/Tops">
                                                <img class="Sidenav-icons"
                                                    src="https://img.icons8.com/doodle/48/000000/modelled-dress.png" />
                                                <span>Tops</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="Sub-product" href="/Heels">
                                                <img class="Sidenav-icons"
                                                    src="https://img.icons8.com/doodle/48/000000/women-shoe-side-view.png" />
                                                <span>Heels</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="header-menu">
                                <span>Others</span>
                            </li>
                            <li>
                                <a class="Main-products" >
                                    <img class="Sidenav-icons"
                                        src="https://img.icons8.com/doodle/48/000000/old-car.png" />
                                    <span>Vehicle Essentials</span>
                                </a>
                            </li>
                            <li>
                                <a class="Main-products" href="/Beauty & Health">
                                    <img class="Sidenav-icons"
                                        src="https://img.icons8.com/doodle/48/000000/barbershop.png" />
                                    <span>Beauty & Health</span>
                                </a>
                            </li>
                            <li>
                                <a class="Main-products" href="/Accessories">
                                    <img class="Sidenav-icons"
                                        src="https://img.icons8.com/doodle/48/000000/watches-front-view.png" />
                                    <span>Accessories</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div id="main-container">

        <!-- Modal -->
        <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body mx-auto">
                        <form class="formContainer" action=/login method="POST">
                            @csrf
                            <div class="inputBox">
                                <input class="sigUname" type="email" name="email" required="required">
                                <p>User Name</p>
                            </div>
                            <div class="inputBox">
                                <input class="sigUpass" type="password" name="password" required="required">
                                <p>Password</p>
                            </div>
                            <div class="warning">
                            </div>
                            <div class="inputBox">
                                <button type="submit" class="btn btn-warning">Login</button>
                            </div>
                        </form>
                    </div>
                        <div class="pt-4 center-container "> <p>Dont have an account? <a style="color:black;" href="/registration">Sign up</a></p></div>
   
                </div>
            </div>
        </div>
        <!-- Search -->
        @yield('content')

    </div>

    <script>
        var counter = 0;
        var counter2 = 0;
        var counter3 = 0;
        var toggleCounter;
        var toggleCounter2 = 0;
        var w;

        setInterval(function () {
            w = window.innerWidth;
            if (w < 760) {
                if (counter == 0) {
                    toggleCounter2 = 1;
                }
                if (counter2 == 1) {
                    document.getElementById("navTriggerMobile").click();
                    counter2 = 0;
                }
                if (toggleCounter2 == 1) {
                    toggleCounter = 0;
                }
            } else {
                if (counter2 == 0) {
                    document.getElementById("navTriggerMobile").click();
                    counter2 = 1;
                }
            }
        }, 200);

        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main-container").style.marginLeft = "250px";
            if (w < 760) {

                document.getElementById("mySidenav").style.width = "100%";
                document.getElementById("main-container").style.marginLeft = "100%";
            }
            counter = 1;
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main-container").style.marginLeft = "0";
            counter = 0;
        }

        function toggleNav() {
            if (toggleCounter == 1) {
                closeNav();
                toggleCounter = 0;
                toggleCounter2 = 1;
            } else {
                openNav();
                toggleCounter2 = 0;
                toggleCounter = 1;
            }
        }

    </script>
    <script>
        $(".sidebar-dropdown > a").click(function () {
            $(".sidebar-submenu").slideUp(200);
            if (
                $(this)
                .parent()
                .hasClass("active")
            ) {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .parent()
                    .removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .next(".sidebar-submenu")
                    .slideDown(200);
                $(this)
                    .parent()
                    .addClass("active");
            }
        });

        $('.navTrigger').click(function () {
            $(this).toggleClass('active');
        });

    </script>

</body>

</html>
