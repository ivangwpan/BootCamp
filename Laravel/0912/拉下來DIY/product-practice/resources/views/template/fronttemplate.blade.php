<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }


        .colorGray {
            color: #5C6C75;
            background-color: #f0f3f2;
        }

        .sHeadline {
            font-size: 1.5rem;
            font-weight: 600;
            line-height: 1.2;
        }

        .sHeadline2 {
            color: #21313c;
            cursor: pointer;
            font-size: .875rem;
            letter-spacing: .03rem;
            font-weight: 900;
            line-height: 1.2;
        }

        .small {
            font-size: .875rem;
            cursor: pointer;
            color: #dfe2e1;
            font-weight: 500;
            line-height: 1.6;
        }

        .textGreen {
            color: #0aad0a;
            padding: 4px 16px;
        }

        .lead {
            font-size: 1rem;
            font-weight: 500;
            color: #5c6c75;
        }

        .img1 {
            background-image: url(/img/grocery-banner.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .img2 {
            background-image: url(/img/grocery-banner-2.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .img3 {
            background-image: url(/img/banner-deal.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 470px;
        }


        .btnButtonBlack {
            background-color: #001e2b;
            text-align: center;
            cursor: pointer;
            border-radius: 0.5rem;
            color: #fff;
            font-size: 0.875rem;
            padding: 1rem 0.55rem;
            font-weight: 600;
            line-height: 1.6;
        }

        .btnButtonGreen {
            background-color: #0aad0a;
            color: #fff;
            cursor: pointer;
            padding: 0.5rem 0.25rem;
            font-size: 0.765625rem;
            border-radius: 0.25rem;
            text-align: center;
            font-weight: 600;
            line-height: 1.6;
        }

        .fcolorGreen {
            color: #0aad0a;
        }

        /* selectbox */

        .selectBox {
            line-height: 30px;
            width: 142px;
            height: 30px;
            position: relative;
            font-weight: bold;
            text-align: end;
        }

        ul.selectBoxMenu {
            box-shadow: 0px 0px 3px 0.01px #888888;
            text-align: start;
            padding: 4px 22px;
            color: #5c6c75;
            display: none;
            position: absolute;
            top: 2%;
            left: 80%;
            list-style: none;
            z-index: 100;

        }

        /* dropdown */

        .dropdownBox {
            float: left;
            overflow: hidden;
        }

        .dropdownBox .dropbtn {
            cursor: pointer;
            font-size: 16px;
            border: none;
            outline: none;
            padding: 14px 16px;

            font-family: inherit;
            margin: 0;
        }

        a:hover,
        .dropdownBox:hover .dropbtn,
        .dropbtn:focus {
            color: #0aad0a;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .show {
            display: block;
        }



        /* SWIPER */

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0.375rem;
        }

        .swiper-slide .swiperText {
            position: absolute;
            top: 10%;
            left: 5%;
            width: 40%;
            height: 100%;
        }

        .swiper-slide .swiperText1 {
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.165rem 0.135rem;

        }

        .swiper-slide .swiperText2 {
            font-size: 2rem;
            font-weight: 700;
            padding: 0.165rem 0.135rem;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
            display: block;
        }

        /* swiper2 */

        .swiper2Img img {
            width: 120px;
            height: 120px;
            object-fit: contain;

        }

        #swiper-button-prev {

            left: var(--swiper-navigation-sides-offset, 93%);
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: unset;
            background-color: rgba(158, 158, 158, 0.171);
            width: 24px;
            height: 24px;
            border-radius: 50%;
            text-align: center;
            margin: auto;
            line-height: 24px;


        }

        .footerBtn {
            font-size: .75rem;
            height: 1.75rem;
            width: 1.75rem;
            align-items: center;
            display: inline-flex;
            border: 1px solid #889397;
            border-radius: 0.5rem;
            color: #889397;
        }


        @media (max-width:1396px) {
            #swiper-button-prev {

                left: var(--swiper-navigation-sides-offset, 90%);
            }

            .swiper-slide .swiperText {
                top: 10%;
                left: 5%;
                width: 70%;
                height: 100%;
            }
        }

        @media (max-width:991px) {

            .dropdownbox,
            .dropbtn,
            .dropdown-content {
                display: none;
            }

            .swiper-slide .swiperText {
                top: 0%;
                left: 5%;
                width: 100%;
                height: 100%;
            }

            #swiper-button-prev {

                left: var(--swiper-navigation-sides-offset, 85%);
            }


            .swiper-slide .swiperText2 {
                font-size: 1rem;
                font-weight: 1000;
                padding: 0.165rem 0.135rem;
                margin-top: 1rem;
                margin-bottom: 0.5rem;
                display: block;
            }

            .swiper-slide .swiperText1 {
                font-size: 0.75rem;
                font-weight: 700;
                padding: 0.165rem 0.135rem;

            }
        }

        @media (max-width: 769px) {
            #swiper-button-prev {

                left: var(--swiper-navigation-sides-offset, 80%);
            }
        }
    </style>
</head>

<body>
    {{-- header --}}
    <div class="header">
        <!-- top1 -->
        <div class="topBox-t colorGray w-100">
            <div class="container d-flex justify-content-between">
                <span>Super Value Deals - Save more with coupons</span>
                <div class="selectBox " tabindex="1">
                    <img src="/img/britishFlag.svg.png" alt="" width="16px" height="12px">
                    <span>English</span>
                    <i class="fa-sharp fa-light fa-chevron-left fa-rotate-270 fa-2xs"></i>

                </div>
                <ul class="selectBoxMenu">
                    <li class="li1 w-100 px-2 " tabindex="1">
                        <img src="/img/britishFlag.svg.png" alt="" width="16px" height="12px">
                        <span>English</span>
                    </li>
                    <li class="li2 px-2" tabindex="1">
                        <img src="/img/deutschFlag.svg.png" alt="" width="16px" height="12px">
                        <span>Deutsch</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- top2 -->
        <div class="topBox-m py-5 w-100">
            <div class="container d-flex justify-content-between">
                <img src="/img/freshcart-logo.svg" alt="">
                <div class="topSearch d-flex align-items-center d-none d-lg-flex flex-nowrap">
                    <input class="p-2 mx-2 topSearchBox" type="text" id="topSearch" placeholder="Search for products">
                    <div class="topSearchButton px-3">
                        <i class="fa-sharp fa-light fa-magnifying-glass" style="color: #575c67;"></i>
                    </div>
                    <button class="border-1 rounded-2 bg-light-subtle px-3 d-none d-lg-block"><i
                            class="fa-sharp fa-light fa-location-dot" style="color: #5c6c75;"></i>
                        Location
                    </button>
                </div>

                <div class="topIcon d-flex align-items-center mx-5">
                    <i class="fa-sharp fa-light fa-heart fa-lg mx-2 d-none d-lg-block " style="color: #5c6c75;"></i>
                    <a href="{{ route('type.index') }}">
                        <i class="fa-sharp fa-light fa-user-large fa-lg mx-2" style="color: #5c6c75;"></i>
                    </a>
                    <i class="fa-sharp fa-light fa-bag-shopping fa-lg mx-2" style="color: #5c6c75;"></i>
                    <a class="btn btn-primary d-block d-lg-none" data-bs-toggle="offcanvas" href="#offcanvasExample"
                        role="button" aria-controls="offcanvasExample">
                        Link
                    </a>

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header d-block">
                            <img class="w-90 mb-2" src="/img/freshcart-logo.svg" alt="">
                            <button type="button" class="btn-close float-end" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                            <div class="topSearch d-flex align-items-center ">
                                <input class="px-2 mx-2 topSearchBox" type="text" id="topSearch"
                                    placeholder="Search for products">
                                <div class="topSearchButton px-3">
                                    <i class="fa-sharp fa-light fa-magnifying-glass" style="color: #575c67;"></i>
                                </div>

                            </div>
                            <button class="border-1 rounded-2 bg-light-subtle w-100 mt-2"><i
                                    class="fa-sharp fa-light fa-location-dot" style="color: #5c6c75;"></i>
                                Location
                            </button>
                        </div>
                        <div class="offcanvas-body h-100">
                            <div class="dropdown ">
                                <button class="btn dropdown-toggle w-100 border-0 rounded-2 btnButtonGreen text-nowrap"
                                    type="button" data-bs-toggle="dropdown">
                                    <i class="fa-light fa-grid-2 fa-lg" style="color: #ffffff;"></i>
                                    All Departments
                                </button>
                                <ul class="dropdown-menu w-100 list-unstyled rounded-2 ">
                                    <li><a class="text-decoration-none " href="#">Dairy, Bread & Eggs</a></li>
                                    <li><a href="#">Snacks & Munchies</a></li>
                                    <li><a href="#">Fruits & Vegetables</a></li>
                                    <li><a href="#">Cold Drinks & Juices</a></li>
                                    <li><a href="#">Breakfast & Instant Food</a></li>
                                    <li><a href="#">Bakery & Biscuits</a></li>
                                    <li><a href="#">Chicken, Meat & Fish</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- top3 -->
        <div class="topBox-b mb-3 w-100">
            <div class="container d-flex">
                <!-- topBotton1 -->
                <div class="dropdownBox">
                    <button class="dropbtn border-0 rounded-2 btnButtonGreen text-nowrap"
                        onmouseover="toggleDropdown(event, 'myDropdown1')">
                        <i class="fa-light fa-grid-2 fa-lg" style="color: #ffffff;"></i>
                        All Departments
                    </button>
                    <ul class="dropdown-content z-3 position-absolute list-unstyled rounded-2 " id="myDropdown1">
                        <li><a href="#">Dairy, Bread & Eggs</a></li>
                        <li><a href="#">Snacks & Munchies</a></li>
                        <li><a href="#">Fruits & Vegetables</a></li>
                        <li><a href="#">Cold Drinks & Juices</a></li>
                        <li><a href="#">Breakfast & Instant Food</a></li>
                        <li><a href="#">Bakery & Biscuits</a></li>
                        <li><a href="#">Chicken, Meat & Fish</a></li>
                    </ul>
                </div>
                <!-- topBotton2 -->
                <div class="dropdownBox">
                    <button class="dropbtn text-nowrap bg-transparent border-0 rounded-2"
                        onmouseover="toggleDropdown(event, 'myDropdown2')">Home
                        <i class="fa-sharp fa-light fa-chevron-right fa-rotate-90 fa-2xs" style="color: #21313c;"></i>
                    </button>
                    <ul class="dropdown-content z-3 position-absolute list-unstyled rounded-2 " id="myDropdown2">
                        <li><a href="#">Home 1</a></li>
                        <li><a href="#">Home 2</a></li>
                        <li><a href="#">Home 3</a></li>
                        <li><a href="#">Home 4</a></li>
                        <li><a href="#">Home 5</a></li>
                    </ul>
                </div>
                <!-- topBotton3 -->
                <div class="dropdownBox">
                    <button class="dropbtn text-nowrap bg-transparent border-0 rounded-2"
                        onmouseover="toggleDropdown(event, 'myDropdown3')">Shop
                        <i class="fa-sharp fa-light fa-chevron-right fa-rotate-90 fa-2xs" style="color: #21313c;"></i>
                    </button>
                    <ul class="dropdown-content z-3 position-absolute list-unstyled rounded-2" id="myDropdown3">
                        <li><a href="#">Shop Grid - Filter</a></li>
                        <li><a href="#">Shop Grid - colunm</a></li>
                        <li><a href="#">Shop List - Filter</a></li>
                        <li><a href="#">Shop - Filter</a></li>
                        <li><a href="#">Shop Wide</a></li>
                        <li><a href="#">Shop Single</a></li>
                        <li><a href="#">Shop Single v2</a></li>
                        <li><a href="#">Shop Wishlist</a></li>
                        <li><a href="#">Shop Cart</a></li>
                        <li><a href="#">Shop Checkout</a></li>
                    </ul>
                </div>
                <!-- topBotton4 -->
                <div class="dropdownBox">
                    <button class="dropbtn text-nowrap bg-transparent border-0 rounded-2"
                        onmouseover="toggleDropdown(event, 'myDropdown4')">Mega menu
                        <i class="fa-sharp fa-light fa-chevron-right fa-rotate-90 fa-2xs" style="color: #21313c;"></i>
                    </button>
                    <ul class="dropdown-content z-3 position-absolute list-unstyled rounded-2 row w-100"
                        id="myDropdown4">
                        <div class="megaMenu1 col-3"><span class="textGreen text-nowrap">Dairy, Bread & Eggs</span>
                            <li><a href="#">Butter</a></li>
                            <li><a href="#">Milk Drinks</a></li>
                            <li><a href="#">Curd & Yogurt</a></li>
                            <li><a href="#">Eggs</a></li>
                            <li><a href="#">Buns & Bakery</a></li>
                            <li><a href="#">Curd & Yogurt</a></li>
                            <li><a href="#">Eggs</a></li>
                            <li><a href="#">Buns & Bakery</a></li>
                        </div>
                        <div class="megaMenu1 col-3"><span class="textGreen text-nowrap">Breakfast & Instant Food</span>
                            <li><a href="#">Breakfast Cereal</a></li>
                            <li><a href="#">Noodles, Pasta & Soup</a></li>
                            <li><a href="#">Frozen Veg Snacks</a></li>
                            <li><a href="#">Frozen Non-Veg Snacks</a></li>
                            <li><a href="#">Vermicelli</a></li>
                            <li><a href="#">Instant Mixes</a></li>
                            <li><a href="#">Batter</a></li>
                            <li><a href="#">Fruit and Juices</a></li>
                        </div>
                        <div class="megaMenu1 col-3"><span class="textGreen text-nowrap">Cold Drinks & Juices</span>
                            <li><a href="#">Soft Drinks</a></li>
                            <li><a href="#">Fruit Juices</a></li>
                            <li><a href="#">Coldpress</a></li>
                            <li><a href="#">Water & Ice Cubes</a></li>
                            <li><a href="#">Soda & Mixers</a></li>
                            <li><a href="#">Health Drinks</a></li>
                            <li><a href="#">Herbal Drinks</a></li>
                            <li><a href="#">Milk Drinks</a></li>
                        </div>
                        <div class="megaMenuPic col-3 ">
                            <span></span>
                        </div>
                    </ul>
                </div>
                <!-- topBotton5 -->
                <div class="dropdownBox">
                    <button class="dropbtn text-nowrap bg-transparent border-0 rounded-2"
                        onmouseover="toggleDropdown(event, 'myDropdown5')">Pages
                        <i class="fa-sharp fa-light fa-chevron-right fa-rotate-90 fa-2xs" style="color: #21313c;"></i>
                    </button>
                    <ul class="dropdown-content z-3 position-absolute list-unstyled rounded-2" id="myDropdown5">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Blog Single</a></li>
                        <li><a href="#">Blog Category</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">404 Error</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <!-- topBotton6 -->
                <div class="dropdownBox">
                    <button class="dropbtn text-nowrap bg-transparent border-0 rounded-2"
                        onmouseover="toggleDropdown(event, 'myDropdown6')">Account
                        <i class="fa-sharp fa-light fa-chevron-right fa-rotate-90 fa-2xs" style="color: #21313c;"></i>
                    </button>
                    <ul class="dropdown-content z-3 position-absolute list-unstyled rounded-2" id="myDropdown6">
                        <li><a href="#">Sign in</a></li>
                        <li><a href="#">Signup</a></li>
                        <li><a href="#">Forgot Password</a></li>
                        <li><a href="#">My Account</a></li>
                    </ul>
                </div>
                <div class="dropdownBox">
                    <button class="dropbtn text-nowrap bg-transparent border-0 rounded-2"><a
                            class="text-decoration-none" style="color: #001e2b;" href="#">Dashboard</a></button>

                </div>
                <div class="dropdownBox">
                    <button class="dropbtn text-nowrap bg-transparent border-0 rounded-2"
                        onmouseover="toggleDropdown(event, 'myDropdown8')">Docs

                    </button>
                    <ul class="dropdown-content z-3 position-absolute list-unstyled rounded-2" id="myDropdown8">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </ul>
                </div>



            </div>
        </div>

    </div>
    <main>
        @yield('main')
    </main>
    {{-- footer --}}
    <footer>
        <div class="colorGray w-100 mt-5">
            <div class="container ">
                <div class="row g-4 py-4">
                    <div class="col-12 col-md-12 col-lg-4">
                        <span class="mb-2 fw-bolder">Categories</span>
                        <div class="row">
                            <div class="col-6 p-0">
                                <ul class="flex-column p-2">
                                    <li class="mb-2 list-unstyled ">
                                        <a href="#" class="text-decoration-none text-muted">Vegetables & Fruits</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted"> Breakfast & instant
                                            food</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted"> Bakery & Biscuits</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Atta, rice & dal</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Sauces & spreads</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Organic & gourmet</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted"> Baby care</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Cleaning essentials</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Personal care</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 p-0">
                                <ul class="flex-column p-2">
                                    <li class="mb-2 list-unstyled ">
                                        <a href="#" class="text-decoration-none text-muted">Dairy, bread & eggs</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Cold drinks & juices</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted"> Tea, coffee & drinks</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Masala, oil & more</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Chicken, meat & fish</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Paan corner</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted"> Pharma & wellness</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Home & office</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Pet care</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="row g-4">
                            <div class="col-6 col-sm-6 col-md-3">
                                <span class="mb-2 fw-bolder">Get to know us</span>
                                <ul class="flex-column p-2">
                                    <li class="mb-2 list-unstyled ">
                                        <a href="#" class="text-decoration-none text-muted">Company</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">About</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Blog</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Help Center</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Our Value</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <span class="mb-2 fw-bolder">For Consumers</span>
                                <ul class="flex-column p-2">
                                    <li class="mb-2 list-unstyled ">
                                        <a href="#" class="text-decoration-none text-muted">Payments</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Shipping</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Product Returns</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">FAQ</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Shop Checkout</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <span class="mb-2 fw-bolder">Become a Shopper</span>
                                <ul class="flex-column p-2">
                                    <li class="mb-2 list-unstyled ">
                                        <a href="#" class="text-decoration-none text-muted">Shopper Opportunities</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Become a Shopper</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Earnings</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Ideas & Guides</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">New Retailers</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <span class="mb-2 fw-bolder">Freshcart programs</span>
                                <ul class="flex-column p-2">
                                    <li class="mb-2 list-unstyled ">
                                        <a href="#" class="text-decoration-none text-muted">Freshcart programs</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Gift Cards</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Promos & Coupons</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Freshcart Ads</a>
                                    </li>
                                    <li class="mb-2 list-unstyled">
                                        <a href="#" class="text-decoration-none text-muted">Careers</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="border-top py-3 d-flex flex-wrap ">
                    <div class="col-lg-5 text-lg-start text-center mb-2 mb-lg-0 d-flex align-items-end">
                        <ul class="d-flex align-items-center ">
                            <li class="mb-2 list-unstyled  me-4 ">
                                <a href="#" class="text-decoration-none text-muted">Payment Partners</a>
                            </li>
                            <li class="mb-2 list-unstyled  me-4">
                                <a href="#" class="text-decoration-none text-muted">
                                    <img src="https://freshcart.codescandy.com/assets/images/payment/amazonpay.svg"
                                        alt="">
                                </a>
                            </li>
                            <li class="mb-2 list-unstyled  me-4">
                                <a href="#" class="text-decoration-none text-muted">
                                    <img src="https://freshcart.codescandy.com/assets/images/payment/american-express.svg"
                                        alt="">
                                </a>
                            </li>
                            <li class="mb-2 list-unstyled  me-4">
                                <a href="#" class="text-decoration-none text-muted">
                                    <img src="https://freshcart.codescandy.com/assets/images/payment//mastercard.svg"
                                        alt="">
                                </a>
                            </li>
                            <li class="mb-2 list-unstyled  me-4">
                                <a href="#" class="text-decoration-none text-muted">
                                    <img src="https://freshcart.codescandy.com/assets/images/payment/paypal.svg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7 mt-4 mt-md-0">
                        <ul class="text-lg-end text-center d-flex flex-nowrap  align-items-center">
                            <li class="text-dark list-unstyled  me-3 ">Get deliveries with FreshCart</li>
                            <li class="text-dark list-unstyled me-3">
                                <a href="#">
                                    <img src="https://freshcart.codescandy.com/assets/images/appbutton/appstore-btn.svg"
                                        alt="">
                                </a>

                            </li>
                            <li class="text-dark list-unstyled">
                                <a href="#">
                                    <img src="https://freshcart.codescandy.com/assets/images/appbutton/googleplay-btn.svg"
                                        alt="">
                                </a>

                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-top py-4">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <span class="small">© 2022 - 2023 FreshCart eCommerce HTML Template.</span>
                            <span class="small">All rights reserved. Powered by <a href="#"
                                    class="fcolorGreen fw-bold text-decoration-none">Codescandy</a>.</span>
                        </div>
                        <div class="col-md-6 text-center ">
                            <span class="me-3">Follow us on</span>
                            <div class="footerBtn p-auto align-items-center justify-content-center">
                                <i class="fa-brands fa-facebook fa-xl"></i>
                            </div>
                            <div class="footerBtn p-auto align-items-center justify-content-center">
                                <i class="fa-brands fa-twitter fa-xl"></i>
                            </div>
                            <div class="footerBtn m-auto align-items-center justify-content-center">
                                <i class="fa-brands fa-instagram fa-xl "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        //swiperBig
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
        //swiperSmall
        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 1,
            spaceBetween: 1,

            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 2,
                },
                820: {
                    slidesPerView: 4,
                    spaceBetween: 5,
                },
                1400: {
                    slidesPerView: 6,
                    spaceBetween: 7,
                },
            },
        });

        //selectBox
        let selectBox = document.querySelector('.selectBox');
        let selectBoxMenu = document.querySelector('.selectBoxMenu');
        let selectBoxli1 = document.querySelector('.li1');
        let selectBoxli2 = document.querySelector('.li2');
        selectBox.addEventListener('click', () => {
            selectBoxMenu.style.display = 'block';
        });
        selectBoxli1.addEventListener('click', () => {
            selectBox.querySelector('span').innerText = 'English';
            selectBox.querySelector('img').src = '/img/britishFlag.svg.png';
            selectBoxMenu.style.display = 'none';
        });
        selectBoxli2.addEventListener('click', () => {
            selectBox.querySelector('span').innerText = 'Deutsch';
            selectBox.querySelector('img').src = '/img/deutschFlag.svg.png';
            selectBoxMenu.style.display = 'none';
        });

        //dropdown
        function toggleDropdown(event, dropdownId) {
            var dropdownContent = document.getElementById(dropdownId);
            var dropdowns = document.querySelectorAll(".dropdown-content");

            dropdowns.forEach(function (dropdown) {
                if (dropdown !== dropdownContent) {
                    dropdown.classList.remove('show');
                }
            });

            dropdownContent.classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.querySelectorAll(".dropdown-content");
                dropdowns.forEach(function (dropdown) {
                    if (dropdown.classList.contains('show')) {
                        dropdown.classList.remove('show');
                    }
                });
            }
        }

    </script>
    @yield('js')
</body>

</html>
