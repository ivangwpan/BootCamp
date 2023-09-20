@extends('templates.fontTemplete')

@section('main-content')
    <div class="container">
        <h1>訂單詳情</h1>
        <div>
            @if (!$orders)
                <h1>你沒訂東西啦</h1>
            @else
                <h3>訂單內的產品</h3>
                <h2>訂單編號：{{ $orders->order_id }}</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">圖片</th>
                            <th scope="col">名稱</th>
                            <th scope="col">單價</th>
                            <th scope="col">購買數量</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders->productOrder as $key => $item)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td><img src="{{ $item->image }}" alt="" style="width: 100px">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>${{ $item->price }}</td>
                                <td>{{ $item->qty }}個</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    <h3>收件資訊</h3>
                    <div>收件者姓名：{{ $orders->name }}</div>
                    <div>收件者地址：{{ $orders->address }}</div>
                    <div>收件日期：{{ str_replace('-', '/', $orders->date) }}</div>
                    <div>收件者電話：{{ $orders->phone }}</div>
                    <div>收件者備註：{{ $orders->menu }}</div>
                </div>
            @endif

        </div>
    </div>
@endsection
