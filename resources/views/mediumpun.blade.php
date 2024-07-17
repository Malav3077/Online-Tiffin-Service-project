<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Medium Punjabi Dish</title>

    <style>
        body {
            font-family: 'lato', sans-serif;
        }
        .container {
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 10px;
            padding-right: 10px;
        }

        h2 {
            font-size: 26px;
            margin: 20px 0;
            text-align: center;
        }

        .responsive-table {
            list-style-type: none;
            padding: 0;
        }

        .responsive-table li {
            border-radius: 3px;
            padding: 25px 30px;
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .responsive-table .table-header {
            background-color: #95A5A6;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        .responsive-table .table-row {
            background-color: #ffffff;
            box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
        }

        .responsive-table .col-1 {
            flex-basis: 10%;
        }

        .responsive-table .col-2 {
            flex-basis: 40%;
        }

        .responsive-table .col-3 {
            flex-basis: 25%;
        }

        .responsive-table .col-4 {
            flex-basis: 25%;
        }

        @media all and (max-width: 767px) {
            .responsive-table .table-header {
                display: none;
            }
            .responsive-table .table-row{
            }
            .responsive-table li {
                display: block;
            }
            .responsive-table .col {
                flex-basis: 100%;
            }
            .responsive-table .col {
                display: flex;
                padding: 10px 0;
            }
            .responsive-table .col:before {
                color: #6C7A89;
                padding-right: 10px;
                content: attr(data-label);
                flex-basis: 50%;
                text-align: right;
            }
        }

        .button {
            display: inline-block;
            background-color: #4CAF50;
            border: none;
            color: white;
            text-align: center;
            font-size: 16px;
            padding: 10px 24px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
          margin-left:415px;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Medium Punjabi Dish🍛<br><small style="color:red;font-size:19px">250 Rs.</small></h2>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">Index</div>
                <div class="col col-2">Item Name</div>
                <div class="col col-3">Quantity</div>
            </li>
            <li class="table-row">
                <div class="col col-1" data-label="Job Id">1</div>
                <div class="col col-2" data-label="Customer Name">Panner Butter Masala</div>
                <div class="col col-3" data-label="Amount">1 Nos</div>
            </li>
            <li class="table-row">
                <div class="col col-1" data-label="Job Id">2</div>
                <div class="col col-2" data-label="Customer Name">Special Sahi Panner </div>
                <div class="col col-3" data-label="Amount">1 Nos</div>
            </li>
            <li class="table-row">
                <div class="col col-1" data-label="Job Id">3</div>
                <div class="col col-2" data-label="Customer Name"> Naan Roti</div>
                <div class="col col-3" data-label="Amount">2 Nos</div>
            </li>
            <li class="table-row">
                <div class="col col-1" data-label="Job Id">4</div>
                <div class="col col-2" data-label="Customer Name"> Tandoori Roti</div>
                <div class="col col-3" data-label="Amount">1 Nos</div>
            </li>
            <li class="table-row">
                <div class="col col-1" data-label="Job Id">5</div>
                <div class="col col-2" data-label="Customer Name">Jira-Rise & Talka Dal</div>
                <div class="col col-3" data-label="Amount">1 Nos</div>
            </li>
            <li class="table-row">
                <div class="col col-1" data-label="Job Id">6</div>
                <div class="col col-2" data-label="Customer Name">Buttermilk</div>
                <div class="col col-3" data-label="Amount">1 Glass</div>
            </li>
           
            <li class="table-row">
                <div class="col col-1" data-label="Job Id">7</div>
                <div class="col col-2" data-label="Customer Name">Sweet(Gulab-Jamun)</div>
                <div class="col col-3" data-label="Amount">2 Pcs</div>
            </li>
        </ul>
         {{-- <a class="button" href="{{ route('medium_p') }}">Order Now</a> --}}
          @if(session()->has('user'))
                <a class="button" href="/mediumpunform">Order Now</a> <!-- Redirect to smallgujform -->
            @else
                <a class="button" href="/create">Order Now</a> <!-- Redirect to account creation page -->
            @endif

    </div>
</body>
</html>
