<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>您好，{{ $myData['name'] }}</h1>
    <p>您已成立訂單，訂單編號為{{ $myData['order_id'] }}。</p>
    <p>總金額為：{{ $myData['total'] }}</p>
    <div style="display: flex">
        <p style="margin-right: auto;">謝謝惠顧</p>
        <p>感謝老爺</p>
    </div>
</body>

</html>
