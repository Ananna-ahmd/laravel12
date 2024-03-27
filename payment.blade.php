<!-- resources/views/payment/options.blade.php -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input, textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Payment Form</h1>
    <form id="paymentForm"action="{{route('payment')}}">
        <label for="cardNumber">bKash Number:</label>
        <input type="text" id="cardNumber" name="cardNumber" placeholder="+880" required>

        <label for="expirationDate">Expiration Date:</label>
        <input type="text" id="expirationDate" name="expirationDate" placeholder="MM/YY" required>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" placeholder="123" required>

        <label for="billingAddress">Billing Address:</label>
        <textarea id="billingAddress" name="billingAddress" required></textarea>

        <button type="submit">Confirm Payment</button>
    </form>
</div>
</body>
</html>
