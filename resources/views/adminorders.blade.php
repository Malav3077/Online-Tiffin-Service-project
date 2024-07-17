<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
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
      /* font-size: 0.8rem; Set a smaller font size for data */
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
    #A {
      color: red;
    }
    #SPAN {
      margin-left: auto;
    }
    .navbar-brand, .navbar-text {
      color: greenyellow;
    }
    .btn-danger {
      background-color: #dc3545;
    }

    /* Action buttons inside table cells */
    .action-btn {
      margin-right: 5px; /* Adjust margin between buttons */
    }
  </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" id="A">Admin Dashboard</a>
        <span class="navbar-text" id="SPAN">
            Welcome Admin
        </span>
         <form action="{{ route('admin.logout') }}" method="POST" class="d-flex ms-auto">
            @csrf
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


<!-- Content -->
<div class="content">
    <h4>Admin Dashboard</h4>
    
    <!-- All Orders Section -->
    <div id="allOrders">
        <h2>All Orders</h2>
        <table class="table">
            <thead>
                <tr>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif  
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
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rr as $order)
                <tr>
                    <th scope="row">{{ $order->user_id }}</th>
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

                 <td>
                  
                 <form id="confirmForm{{ $order->user_id }}" action="{{ route('confirmm-order', ['user_id' => $order->user_id]) }}" method="POST">
                  @csrf
                  <button type="button" class="btn btn-success btn-sm action-btn px-3 py-2" onclick="confirmOrder({{ $order->user_id }})">Confirm</button>
              </form>
                    <td>


                    <form id="deleteForm{{ $order->user_id }}" action="{{ route('deletes-order', ['user_id' => $order->user_id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm action-btn px-3 py-2" onclick="return confirmDelete('{{ $order->user_id }}')">Delete</button>
              </form>


                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @if($rr->isEmpty())
            <p>No orders found.</p>
        @endif
    </div>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4EJDoGbZsfs3bVn9gfZlb0E1+ssVpyTTOB4Bhj+0K3R5YgO/d82vX0z/kAApJ" crossorigin="anonymous"></script>

<script>
       function confirmOrder(orderId) {
        if (confirm("Are you sure you want to confirm this order?")) {
            document.getElementById('confirmForm' + orderId).submit();
        }
    } 


       function confirmDelete(orderId) {
        if (confirm("Are you sure you want to Delete this order?")) {
            document.getElementById('confirmForm' + orderId).submit();
        }
    } 


</script>



</body>
</html>
