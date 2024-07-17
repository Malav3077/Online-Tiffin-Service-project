<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmed Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Sidebar */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #212529;
            padding-top: 4rem;
        }
        .sidebar a {
            padding: 10px 20px;
            display: block;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .sidebar a:hover {
            background-color: #343a40;
        }

        /* Content */
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .content h4 {
            color: white;
        }
        .content > div {
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Table */
        table {
            width: 100%;
            background-color: #f8f9fa;
        }
        th, td {
            padding: 10px;
            text-align: left;
            font-size: 13px;
        }
        th {
            background-color: #343a40;
            color: #fff;
        }
        tbody tr:nth-child(even) {
            background-color: #e9ecef;
        }

        /* Navbar */
        .navbar-dark.bg-dark {
            background-color: #343a40 !important;
        }
        .navbar-brand, .navbar-text {
            color: greenyellow;
            margin-left: 50px;
        }
        .btn-danger {
            background-color: #dc3545;
        }

        /* Action buttons inside table cells */
        .action-btn {
            margin-right: 5px;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <span class="navbar-text">
            Welcome Admin
        </span>
        <form class="d-flex ms-auto">
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    </div>
</nav>

<!-- Sidebar -->
<div class="sidebar">
    <a href="{{ route('adminorders') }}">All Orders</a>
    <a href="{{ route('confirmed-orders') }}">Confirmed Orders</a>
    <a href="{{ route('deleted-orders') }}">Deleted Orders</a>
</div>
    <h4 style="color:rgb(94, 20, 255);margin-left:700px;margin-top:50px">Deleted Orders</h4>

<!-- Content -->
<div class="content">
    <div id="confirmedOrders">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Tiffin Type</th>
                    <th>Cost</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Total Over Cost</th>
                    <th>Time</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($deletedOrders as $order)
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->customername }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->contact }}</td>
                    <td>{{ $order->tiffintype }}</td>
                    <td>{{ $order->cost }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->from_date }}</td>
                    <td>{{ $order->to_date }}</td>
                    <td>{{ $order->totalovercost }}</td>
                    <td>{{ $order->time }}</td>
                    <td>{{ $order->address }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @if($deletedOrders->isEmpty())
            <p>No Delete orders found.</p>
        @endif
    </div>
</div>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4EJDoGbZsfs3bVn9gfZlb0E1+ssVpyTTOB4Bhj+0K3R5YgO/d82vX0z/kAApJ" crossorigin="anonymous"></script>

</body>
</html>
