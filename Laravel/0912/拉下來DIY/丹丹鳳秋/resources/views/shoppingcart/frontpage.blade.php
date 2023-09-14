@extends('template.fronttemplate')
@section('main')
    <div class="container ">
        <div>
            <span class="fcolorGreen">Home </span>/
            <span class="fcolorGreen"> Shop </span>/
            <span style="color: #5c6c75;"> Shop Checkout</span>
        </div>
        <h1>Checkout</h1>
        <div class="mb-3">Already have an account? Click here to
            <span class="fcolorGreen">Sign in.</span>
        </div>
        <div class="content  mb-5">
            <div class="card">
                <div class="card-body">
                    <h2>Order Details</h2>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <img src="" alt="product pic" width="170px" height="170px">
                        <div class="text">
                            <div>product_name</div>
                            <div style="color: #5c6c75;">Amount</div>
                        </div>
                        <div>
                            <button>-</button>
                            <span>number</span>
                            <button>+</button>
                        </div>
                        <span>$price</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h4>Subtotal</h4>
                        <span>$price</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="text-center d-flex justify-content-end">
            <a href="{{ route('freshcart.address') }}">
                <button>下一步</button>
            </a>
        </div>



    </div>
@endsection

@section('js')
@endsection
