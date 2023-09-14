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
        <div class="mb-3">
            <i class="fa-sharp fa-light fa-location-dot fa-sm" style="color: #000000;"></i>
            <span>配送資訊</span>
        </div>


        <div class="content">
            <div class="card mb-5">
                <div class="card-body d-block ">
                    <input class="w-100 rounded-2 m-1" type="text" placeholder="收件者姓名 ">
                    <input class="w-100 rounded-2 m-1" type="text" placeholder="收件者姓名 ">
                    <input class="w-100 rounded-2 m-1" type="date">
                    <input class="w-100 rounded-2 m-1" type="text" placeholder="收件者連絡電話 ">
                    <input class="w-100 rounded-2 m-1" type="text" placeholder="備註">

                </div>
            </div>
            <div class="text-center d-flex justify-content-between">
                <a href="{{ route('freshcart.index') }}">
                    <button >上一步</button>
                </a>
                <a href="{{ route('freshcart.payment') }}">
                    <button >下一步</button>
                </a>
            </div>


        </div>
    </div>
@endsection

@section('js')
@endsection
