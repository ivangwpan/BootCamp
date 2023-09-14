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
            <i class="fa-regular fa-credit-card fa-sm" style="color: #b3b3b3;"></i>
            <span>付款資訊</span>
        </div>


        <div class="content">
            <div class="card mb-2">
                <div class="card-body d-flex ">
                    <input type="radio" name="choose">
                    <div class=" ms-3">
                        <h4>臨櫃匯款</h4>
                        <p>Account</p>
                        <p>Branch</p>
                        <p>Phone number</p>
                        <p>Remark</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="card mb-2">
                <div class="card-body d-flex ">
                    <input type="radio"  name="choose">
                    <div class="d-block ms-3">
                        <h4>線上付款</h4>
                        <span>Remark</span>
                    </div>
                </div>
            </div>

            <div class="text-center d-flex justify-content-between">
                <a href="{{ route('freshcart.address') }}">
                    <button>上一步</button>
                </a>
                <a href="{{ route('freshcart.thank') }}">
                    <button>下一步</button>
                </a>
            </div>


        </div>
    </div>
@endsection

@section('js')
@endsection
