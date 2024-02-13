<html lang="en">
<head>

    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #7731D8;
            margin: 0;
            padding: 0;
            display: grid;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px lavender;
            width: 400px;
        }

        label {
            display: block;
            margin-bottom:8px;}

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
           color: black;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;

        }
    </style>
</head>
<body>

<form>
    <label for="username">Username:</label>
    <input type="text"  name="username" required>

    <label for="email">Email:</label>
    <input type="email"  name="email" required>

    <label for="password">Password:</label>
    <input type="password"  name="password" required>

    <button type="submit">Register</button>
</form>

</body>
</html>
