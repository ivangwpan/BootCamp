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
        <div class="m-5 text-center">

            <span>感謝您的購買~~</span>
        </div>


        <div class="content">
            <div></div>

            <div class="text-center d-flex justify-content-center ">
                <a href="{{ route('front.index') }}">
                    <button class="me-5">回首頁</button>
                </a>

                <a href="{{ route('front.products') }}">
                    <button>查看訂單</button>
                </a>
            </div>


        </div>
    </div>
@endsection

@section('js')
@endsection
