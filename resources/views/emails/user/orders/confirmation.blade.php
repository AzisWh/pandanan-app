<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANDANAN CONFIRMATION</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            color: #333;
        }
        p {
            color: #555;
        }
        .button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            text-align: center;
            display: inline-block;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Confirmation</h1>
        <p>Dear {{ $order->name }},</p>

        <p>Your order has been <strong>confirmed</strong>. Here are the details:</p>

        <p><strong>Order ID:</strong> {{ $order->id }}</p>
        <p><strong>Customer Name:</strong> {{ $order->name }}</p>
        <p><strong>Email:</strong> {{ $order->email }}</p>
        <p><strong>WhatsApp:</strong> {{ $order->whatsapp }}</p>
        <p><strong>Payment Account:</strong> {{ $order->payment_account }}</p>
        <p><strong>Status:</strong> {{ ucfirst($order->status) }}</p>

        <p>If you have any questions, feel free to contact us.</p>

        <a href="{{ url('/dashboard-admin') }}" class="button">Go to Admin Panel</a>
    </div>
</body>
</html>
