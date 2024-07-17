<!DOCTYPE html>
<html>
  <head>
    <title>Tiffin Booking</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa; /* Background color */
        margin: 0;
        padding: 0;
      }

      .container {
        max-width: 500px; /* Limiting width for better readability */
        margin: 50px auto; /* Centering the form */
        padding: 20px;
        background-color: #ffffff; /* Form background color */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adding a subtle shadow */
        text-align: center; /* Centering content inside container */
      }

      h1 {
        color: #333333; /* Heading color */
        margin-bottom: 20px;
        font-size: 24px; /* Increased font size for heading */
      }

      label {
        display: block;
        margin-top: 10px;
        color: #333333; /* Label color */
        text-align: left; /* Align labels to left */
      }

      input,
      select,
      textarea {
        width: calc(100% - 16px); /* Full width with padding adjustment */
        padding: 10px;
        border: 1px solid #ced4da; /* Light gray border */
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 2px;
        margin-bottom: 10px;
        transition: border-color 0.3s ease; /* Adding transition effect */
        background-color: #f1f1f1; /* Light gray background */
        font-size: 16px; /* Increased font size for input fields */
      }

      input[type="submit"] {
        background-color: #28a745; /* Green submit button */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 50%; /* Shorter width */
        margin: 0 auto; /* Centering the button */
        transition: background-color 0.3s ease; /* Adding transition effect */
        font-size: 18px; /* Increased font size for submit button */
      }

      input[type="submit"]:hover {
        background-color: #218838; /* Darker shade on hover */
      }

      input[type="text"]:hover,
      input[type="email"]:hover,
      input[type="tel"]:hover,
      select:hover,
      textarea:hover,
      input[type="date"]:hover,
      input[type="time"]:hover {
        border-color: #80bdff; /* Border color on hover */
        background-color: #d6e6ff; /* Light blue background on hover */
      }

      input[type="text"]:focus,
      input[type="email"]:focus,
      input[type="tel"]:focus,
      select:focus,
      textarea:focus,
      input[type="date"]:focus,
      input[type="time"]:focus {
        outline: none; /* Remove outline on focus */
        border-color: #007bff; /* Border color on focus */
        box-shadow: 0 0 5px #007bff; /* Adding a subtle shadow on focus */
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Tiffin Booking</h1>
      <form action="/storeorder" method="post">
         @csrf
        <label for="customer_name">Customer Name:</label>
        <input type="text" id="customer_name" name="customername" value="{{ session('customername', '') }}" require/>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ session('email', '') }}" require />
        <label for="contact">Contact:</label>
        <input type="number" id="contact" name="contact"value="{{ session('contact', '') }}" require />
        <label for="tiffin">Tiffin:</label>
        <input type="text" id="tiffin" name="tiffintype" value="Large Punjabi Dish" readonly />

        <label for="cost">Cost:</label>
        <input type="number" id="cost" name="cost" value="350" readonly />
      
<label for="quantity">Quantity:</label>
<input type="number" id="quantity" name="quantity" min="1" onchange="TotalCal()" required />

<label for="total">Total:</label>
<input type="number" id="total" name="total" readonly /> 

<script>
    function TotalCal() {
        let dishPrice = document.getElementById("cost").value;
        let numDishes = document.getElementById("quantity").value;
        let totalPrice = parseFloat(dishPrice) * parseInt(numDishes);
        document.getElementById("total").value = totalPrice;
        calculateTotalOverCost();
    }

    function calculateTotalOverCost() {
        let fromDate = new Date(document.getElementById("from_date").value);
        let toDate = new Date(document.getElementById("to_date").value);
        
     
        if (!isNaN(fromDate) && !isNaN(toDate) && fromDate <= toDate) {
            let totalDays = Math.ceil((toDate - fromDate) / (1000 * 60 * 60 * 24)); 
            let totalCost = parseFloat(document.getElementById("total").value);
            let totalOverCost = totalDays * totalCost;
            document.getElementById("totalovercost").value = totalOverCost.toFixed(2);
        } else {
            document.getElementById("totalovercost").value = "Invalid Date Range";
        }
    } 
          </script>

          <label for="from_date">From Date:</label>
          <input type="date" id="from_date" name="from_date" onchange="calculateTotalOverCost()" required/>

          <label for="to_date">To Date:</label>
          <input type="date" id="to_date" name="to_date" onchange="calculateTotalOverCost()" required/>

          <label for="totalovercost">TotalOverCost:</label>
          <input type="number" id="totalovercost" name="totalovercost" readonly/>
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" />
        <label for="address">Address:</label>
        <textarea id="address" name="address" required>{{ session('address', '') }}</textarea>
        <input type="submit" value="Submit" />
      </form>
    </div>
  </body>
</html>
