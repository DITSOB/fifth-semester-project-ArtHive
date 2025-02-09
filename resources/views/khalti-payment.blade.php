<!DOCTYPE html>
<html lang="en">
<head>
    <title>Khalti Payment</title>
</head>       
<body>
    <h2>Scan to Pay via Khalti</h2>
    <img src="{{ asset('img/khalti.png') }}" width="300">
    <p>Scan the QR code above or use Khalti App to pay Rs. {{ $order->cost }}</p>
    
    <form action="{{ route('confirmPayment', ['order_id' => $order->id, 'method' => 'khalti']) }}" method="POST">
        @csrf
        <button type="submit">I Have Paid</button>
    </form>

    <a href="/">Cancel</a>
</body>
</html>