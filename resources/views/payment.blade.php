<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>
<body>

    <h4>Order Id: {{$data['order']['id']}}</h4>
    <h4>Order Name: {{ $data['order']['name']}}</h4>
    <h4>Order Address: {{ $data['order']['address'] }}</h4>
    <h4>Order City: {{$data['order']['city']}}</h4>
    <h4>Order Phone: {{$data['order']['phone']}}</h4>
    <h4>Order Email: {{$data['order']['email']}}</h4>

    <h3>Products</h3>
    <table border="1">
        <tr>
            <th>Image</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        @foreach ($data['orderitems'] as $item)
        <tr>
            <td><img src="{{ asset('img/' . $item->product_image) }}" width="50"></td>
            <td>{{ $item->product_name }}</td>
            <td>{{ $item->product_quantity }}</td>
            <td>${{ $item->product_price }}</td>
        </tr>

        @endforeach
    </table>

    <h4>Total Price: {{ Session::get('totalPrice') }}</h4>

    <h3>Select Payment Method</h3>

    <form action="{{ route('processPayment') }}" method="POST">
        @csrf
        <label>
            <input type="radio" name="payment_method" value="khalti" required> Pay via Khalti
        </label><br>
        <label>
            <input type="radio" name="payment_method" value="esewa" required> Pay via eSewa
        </label><br>
        <label>
            <input type="radio" name="payment_method" value="cod" required> Home Delivery (Cash on Delivery with extra charge Rs100)
        </label><br><br>

        <button type="submit">Proceed</button>
    </form>

    <h4><a href="/">Cancel</a></h4>

</body>
</html>