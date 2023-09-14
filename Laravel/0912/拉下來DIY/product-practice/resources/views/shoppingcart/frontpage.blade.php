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
                    @php
                        $total = 0
                    @endphp
                    @foreach ($carts ?? [] as $item)
                        <div class="d-flex justify-content-between">
                            <img src="{{ $item->product->img_path }}" alt="product pic" width="170px" height="170px">
                            <div class="text">
                                <div>{{ $item->product->name }}</div>
                                <div style="color: #5c6c75;">Amount</div>
                            </div>
                            <div>
                                <button type="button" class="controlBtn minusBtn"
                                    onclick="minus({{ $item->id }})">-</button>
                                <input id="product{{ $item->id }}" type="number" value="{{ $item->qty }}"
                                    onchange="checkQty(this)">
                                    
                                <button type="button" class="controlBtn plusBtn"
                                    onclick="plus({{ $item->id }})">+</button>
                            </div>
                            <span>${{ $item->product->price * $item->qty }}</span>
                        </div>
                        @php
                            $total +=  $item->product->price * $item->qty 
                        @endphp
                    @endforeach
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h4>Subtotal</h4>
                        <span>${{ $total }}</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="text-center d-flex justify-content-end">
            <a href="{{ route('orderlist.addresspage') }}">
                <button>下一步</button>
            </a>
        </div>



    </div>
@endsection

@section('js')
    <script>
        function minus(id) {
            const input = document.querySelector(`input#product${id}`);
            if (input.value === '1') return;
            input.value--;
        }

        function plus(id) {
            const input = document.querySelector(`input#product${id}`);
            input.value++;
        }

        function checkQty(el) {
            if (el.value <= 0) {
                el.value = 1;
            }
        }

        function fetch(el){
            const formData = new FormData();
        }
    </script>
@endsection
