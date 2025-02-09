<!DOCTYPE html>
<html lang="en">
<head>
    <title>eSewa Payment</title>
</head>       
<body>
    <h2>Scan to Pay via eSewa</h2>
    <img src="{{ asset('img/esewa.jpg') }}" width="300">
    <p>Scan the QR code above or use Khalti App to pay Rs. {{ $order->cost }}</p>
    
    <form action="{{ route('confirmPayment', ['order_id' => $order->id, 'method' => 'esewa']) }}" method="POST">
        @csrf
        <button type="submit">I Have Paid</button>
    </form>

    <a href="/">Cancel</a>
</body>
</html>
