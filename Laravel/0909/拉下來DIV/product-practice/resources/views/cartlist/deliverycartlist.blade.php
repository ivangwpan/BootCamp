@extends('templates.fontTemplete')

@section('main-content')
    <section class="messageBoard">
        <div class="container row ms-auto me-auto">
            <div>
                <h1>Checkout</h1>
                <h8 class="text-muted">Already have an account? Click here to <span style="color: #6DD8D4;"> Sign in. </span>
                </h8>
            </div>
            <div class="text-muted">
                <img src="" alt="">
                配送資訊
            </div>
            <div class="d-flex flex-column justify-content-center flex-wrap align-items-center border row">
                <div><input placeholder="收件者姓名" class="border-secondary-subtle p-2 m-2 col-12 w-100" type="text" name="name" id=""></div>
                <div><input placeholder="收件者地址" class="border-secondary-subtle p-2 m-2 col-12 w-100" type="text" name="address" id=""></div>
                <div><input placeholder="年/月/日" class="border-secondary-subtle p-2 m-2 col-12 w-100" type="date" name="date" id=""></div>
                <div><input placeholder="收件者連絡電話" class="border-secondary-subtle p-2 m-2 col-12 w-100" type="number" name="phone_number" id="">
                </div>
                <div><input placeholder="備註" class="border-secondary-subtle col-12 w-100" type="text" name="other" id=""></div>
            </div>
            <div class="d-flex">
                <button class="">上一步</button>
                <button class="ms-auto">下一步</button>
            </div>

        </div>
    </section>
@endsection


@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
