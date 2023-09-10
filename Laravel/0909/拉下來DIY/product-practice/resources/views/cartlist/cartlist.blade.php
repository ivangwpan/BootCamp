@extends('templates.fontTemplete')

@section('main-content')
    <section class="messageBoard">
        <div class="container row ms-auto me-auto">
            <h1>Checkout</h1>
            <h8 class="text-muted">Already have an account? Click here to <span style="color: #6DD8D4;"> Sign in. </span ></h8>
            <div class="d-flex flex-column justify-content-center flex-wrap align-items-center border">
                <h3 class="me-auto pt-3 ps-3">Order Details</h3>
                <hr>
                <div class="d-flex row w-100 border">
                    <img src="https://shoplineimg.com/5de9cc7ed9d3e30022390855/60d9339b2fc5860023cf3663/800x.webp?source_format=jpg" alt="" class="col-1">
                    <div class="col-6 d-flex flex-column">
                        <div class="col-12">Cadbury 5 Star Chocolate</div>
                        <div class="col-12">1 kg</div>
                    </div>
                    <div class="col-4">-1+</div>
                    <div class="col-1">$15.00</div>
                </div>
                <hr class="border">
                <div class="d-flex row w-100 border">
                    <img src="https://shoplineimg.com/5de9cc7ed9d3e30022390855/60d9339b2fc5860023cf3663/800x.webp?source_format=jpg" alt="" class="col-1">
                    <div class="col-6 d-flex flex-column">
                        <div class="col-12">Cadbury 5 Star Chocolate</div>
                        <div class="col-12">1 kg</div>
                    </div>
                    <div class="col-4">-1+</div>
                    <div class="col-1">$15.00</div>
                </div>
                <h5 class="me-auto pt-3 ps-3">Subtotal</h5>
                <button class="ms-auto">下一步</button>
            </div>

        </div>
    </section>
@endsection


@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
