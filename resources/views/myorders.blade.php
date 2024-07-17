<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2ecc71;
            --background-color: #f0f4f8;
            --card-background: #ffffff;
            --text-color: #2c3e50;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: var(--background-color);
            color: var(--text-color);
        }
        h1 {
            color: var(--primary-color);
            text-align: center;
            font-size: 2.8em;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 2px 2px 4px var(--shadow-color);
        }
        .order-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            max-width: 1400px;
            margin: 0 auto;
        }
        .order-card {
            background-color: var(--card-background);
            border-radius: 20px;
            box-shadow: 0 15px 30px var(--shadow-color);
            padding: 30px;
            width: 380px;
            transition: all 0.3s ease;
        }
        .order-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }
        .order-details {
            margin-bottom: 25px;
        }
        .order-details p {
            margin: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 10px;
        }
        .label {
            font-weight: bold;
            color: var(--primary-color);
            font-size: 1.1em;
        }
        .value {
            text-align: right;
            font-weight: 500;
        }
        .download-btn {
            display: block;
            background: linear-gradient(45deg, var(--secondary-color), #27ae60);
            color: white;
            padding: 15px 25px;
            text-decoration: none;
            border-radius: 50px;
            text-align: center;
            transition: all 0.3s ease;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.4);
        }
        .download-btn:hover {
            background: linear-gradient(45deg, #27ae60, var(--secondary-color));
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 20px rgba(46, 204, 113, 0.6);
        }
        @media screen and (max-width: 600px) {
            .order-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>My Orders</h1>
    <div class="order-container">
        @foreach($orders as $order)
        <div class="order-card">
            <div class="order-details">
                <p><span class="label">Customer Name:</span> <span class="value">{{ $order->customername }}</span></p>
                <p><span class="label">Email:</span> <span class="value">{{ $order->email }}</span></p>
                <p><span class="label">Contact:</span> <span class="value">{{ $order->contact }}</span></p>
                <p><span class="label">Tiffin Type:</span> <span class="value">{{ $order->tiffintype }}</span></p>
                <p><span class="label">Cost:</span> <span class="value">{{ $order->cost }}</span></p>
                <p><span class="label">Quantity:</span> <span class="value">{{ $order->quantity }}</span></p>
                <p><span class="label">Total:</span> <span class="value">{{ $order->total }}</span></p>
                <p><span class="label">From Date:</span> <span class="value">{{ $order->from_date }}</span></p>
                <p><span class="label">To Date:</span> <span class="value">{{ $order->to_date }}</span></p>
                <p><span class="label">Total Over Cost:</span> <span class="value">{{ $order->totalovercost }}</span></p>
                <p><span class="label">Time:</span> <span class="value">{{ $order->time }}</span></p>
                <p><span class="label">Address:</span> <span class="value">{{ $order->address }}</span></p>
                <p><span class="label">Status:</span> <span class="status">{{ $order->confirmed ? 'Success' : 'Pending' }}</span></p>
            </div>
            <a href="#" class="download-btn" onclick="window.print()">Print Invoice</a>
        </div>
        @endforeach
    </div>
</body>
</html>