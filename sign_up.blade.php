<html lang="en">
<head>

    <title>Log in Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e2e8f0;
            margin: 0;
            padding: 0;
            display: grid;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            width: 100%;
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

        }

        button:hover {
            background-color: #45a049;
            color: #e2e8f0;

        }
        .button1{
            background-color: #4caf50;
            color: black;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;

            text-decoration: none;
            display: inline-flex;

        }
        .button1:hover{
            background-color: #45a049;
            color: #e2e8f0;

        }


    </style>

</head>
<body>


<form method="post" action="{{route('sign_up')}}">

    @csrf
    <label for="username">Username:</label>
    <input type="text"  name="username" >

    <label for="email">Email:</label>
    <input type="email"  name="email" >

    <label for="password">Password:</label>
    <input type="password"  name="password" >
    <label for="password">Confirm Password:</label>
    <input type="password"  name="password" >

    <button type="submit">Sign Up</button>
    <a href="{{route('e_learning_home')}}" class="button1" >Cancel</a>

</form>

