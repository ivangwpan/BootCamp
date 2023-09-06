<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<style>
    .dropdown :hover {
        color: #3ae65d;
        display: block;
    }

    .footer {
        width: 100%;
        background-color: #F0F3F2;
    }

    .card-w {
        width: 300px;
    }

    a {
        color: black;
    }

    a:hover {
        color: #3ae65d;
    }

    .btx {
        width: 50px;
        height: 50px;

    }

    .circle {
        width: 10px !important;
        height: 10px !important;
        border-radius: 50%;
    }
</style>

<body>

    <!--頂層回首頁 FreshCart-->
    <div class="d-xl-flex flex-row mb-3 container ">
        <a href="https://freshcart.codescandy.com/index.html"
            class="p-xl-3 fw-bolder fs-2 text-dark text-decoration-none ">
            <img src="{{ asset('image/freshcart-logo.svg') }}" alt=""></a>
        <div class="input-group mb-3 pt-4 w-25">
            <input type="text" class="form-control" placeholder="Search for products"
                aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                <img src="{{ asset('image/search.svg') }}" alt="">
            </button>
        </div>
        <div class="py-xl-4 ps-xl-2">
            <button class="btn border" type="submit">
                <img src="{{ asset('image/geo-alt.svg') }}" alt="" class="pe-xl-2">Location
            </button>
        </div>
        <div class="pt-xl-4  ms-auto ">
            <a href="https://freshcart.codescandy.com/pages/shop-wishlist.html" class="text text-decoration-none">
                <img src="{{ asset('image/heart.svg') }}" alt="">
            </a>
            <a href="{{ route('product.index') }}">
                <img src="{{ asset('image/person.svg') }}" alt="" class="ps-xl-3">
            </a>
        </div>
        <a href="https://freshcart.codescandy.com/pages/shop-wishlist.html" class="p-xl-4">
            <img src="{{ asset('image/bag-check.svg') }}" alt="">
        </a>

    </div> <!--標題頂層-->
    <div class="d-xl-flex flex-row container mb-xxl-5 "> <!--頂層第二列-->
        <div class="dropdown">
            <button class="btn bg-success-subtle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('image/list.svg') }}" alt="" class="p-xl-1">All Departments
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item active" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>
        <div class="ps-xl-2  d-block"> <!--第二列選單一-->
            <div class="dropdown ps-xl-3 ">
                <a class="btn  dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Home
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="ps-xl-2 "><!--第二列選單二-->
            <div class="dropdown ps-xl-3 ">
                <a class="btn  dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    shop
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="ps-xl-2">
            <div class="dropdown "><!--第二列選單三-->
                <a class="btn  dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    stores
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="ps-xl-2 ">
            <div class="dropdown ps-xl-3 "><!--第二列選單四-->
                <a class="btn  dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Mega menu
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="ps-xl-2"><!--第二列選單五-->
            <div class="dropdown ps-xl-3 ">
                <a class="btn  dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Pages
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="ps-xl-2"><!--第二列選單六-->
            <div class="dropdown ps-xl-3 ">
                <a class="btn  dropdown-toggle fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Account
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="ps-xl-2"><!--第二列選單七-->
            <div class="dropdown text-xl- ">
                <a class="btn fw-bolder " href="https://freshcart.codescandy.com/dashboard/index.html"
                    role="button">
                    dashboard
                </a>

            </div>
        </div>
        <div class="ps-xl-2"><!--第二列選單八-->
            <div class="dropdown ps-xl-3 ">
                <a class="btn   fw-bolder" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Docs
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row mb-8">
            <div class="col-md-12">
                <!-- page header -->
                <div>
                    <h2>留言板</h2>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-12 mb-5">
                <!-- card -->
                <div class="card h-100 card-lg">
                    <!-- card body -->
                    <div class="card-body p-0">
                        <!-- table responsive -->
                        <div class="table-responsive">
                            <table
                                class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="col-1">Image</th>
                                        <th class="col-1">類別名稱</th>
                                        <th class="col-9">類別描述</th>
                                        <th class="col-1">功能</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>name</td>
                                        <td>desc</td>
                                        <td>created_at->format('Y/m/d')</td>
                                        <td>
                                            <div class="dropdown">
                                                <div>
                                                    <form action="" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item" type="submit">
                                                            <i class="fa-regular fa-trash-can me-3"></i>
                                                            刪除
                                                        </button>
                                                    </form>
                                                </div>
                                                <div><a class="dropdown-item" href="">
                                                        <i class="fa-light fa-pen-to-square me-3"></i>編輯</a>
                                                </div>
                                            </div>
                                        </td>
                                        <tr>
                                            <td>
                                                <textarea class="pl-5" name="" id="" cols="30" rows="10" style="max-height: 50px;">回覆該留言</textarea>
                                            </td>
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                        <textarea name="" id="" cols="90" rows="10" placeholder="建立新留言，蓋新樓"></textarea>
                        {{-- <nav class="mt-2 mt-md-0"> --}}
                            <ul class="pagination mb-0 ">
                                <li class="page-item"><a class="page-link" href="#">送出</a></li>
                            </ul>
                        {{-- </nav> --}}
                    </div>
                </div>

            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
