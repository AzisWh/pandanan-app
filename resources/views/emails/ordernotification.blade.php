<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order Notification</title>
</head>
<body>
    <h1>New Order Received</h1>
    <p>You have received a new order. Here are the details:</p>

    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Customer Name:</strong> {{ $order->name }}</p>
    <p><strong>Email:</strong> {{ $order->email }}</p>
    <p><strong>WhatsApp:</strong> {{ $order->whatsapp }}</p>
    <p><strong>Payment Account:</strong> {{ $order->payment_account }}</p>
    <p><strong>Status:</strong> {{ $order->status }}</p>

    <p>Please check the admin panel for more details.</p>
    <a href="{{url ('/dashboard-admin')}}">Click Here</a>
</body>
</html>
