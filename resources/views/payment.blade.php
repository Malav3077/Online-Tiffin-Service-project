<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        .payment-form {
            max-width: 400px;
            margin: 50px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto payment-form">
                <h2 class="text-center mb-4">Payment Form</h2>
                <form action="{{ route('handlePayment') }}" method="post" onsubmit="return validate_creditcardnumber(event)">
                    @csrf
                    <div class="mb-3">
                        <label for="cardNumber" class="form-label">Card Number</label>
                        <input type="text" name="cardNumber" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="expiryDate" class="form-label">Expiry Date</label>
                            <input type="text" name="expiryDate" class="form-control" id="expiryDate" placeholder="MM/YY" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cvv" class="form-label">CVV</label>
                            <input type="number" name="cvv" class="form-control" id="cvv" placeholder="123" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cardHolder" class="form-label">Cardholder Name</label>
                        <input type="text" name="cardHolder" class="form-control" id="cardHolder" placeholder="Malav Parekh" required>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" name="amount" class="form-control" id="amount" placeholder="100.00" value="{{ $totalovercost }}" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Pay Now</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function validate_creditcardnumber(event) {
            event.preventDefault();
            let val = document.getElementById("cardNumber").value;
            var re16digit = /^\d{16}$/;
            if (!val.match(re16digit)) {
                Swal.fire("Error", "Please enter your 16-digit credit card number", "error");
                return false;
            }
            let mmyy = document.getElementById("expiryDate").value;
            var reExpiryDate = /^(0[1-9]|1[0-2])\/\d{2}$/;
            if (!mmyy.match(reExpiryDate)) {
                Swal.fire("Error", "Please Enter Proper Expiry Date (MM/YY)", "error");
                return false;
            }
            let Cvv = document.getElementById("cvv").value;
            var reCVV = /^\d{3}$/;
            if (!Cvv.match(reCVV)) {
                Swal.fire("Error", "Please enter 3-digit CVV", "error");
                return false;
            }
            Swal.fire({
                title: "Disclaimer",
                text: "After payment, do not cancel your order.",
                icon: "info",
                showCancelButton: true,
                confirmButtonText: "Yes, proceed",
                cancelButtonText: "No, cancel",
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire("Success", "Payment successful!", "success");
                    setTimeout(function(){
                        event.target.submit();
                    }, 1500);
                } else {
                    Swal.fire("Cancelled", "Payment Declined..!!❌", "error");
                }
            });
        }
    </script>

    
</body>
</html>
