<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightcoral;
            margin: 0;
            padding: 0;
            background-image: url("https://corporate.walmart.com/content/corporate/en_us/purpose/sustainability/planet/nature/jcr:content/par/image_2_0.img.png/1693432526985.png");
            background-repeat: no-repeat;
            background-size: cover;


        }

        .button {
            background-color: #04AA6D; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #04AA6D;
            float: left;
        }

        .button1:hover {
            background-color: #04AA6D;
            color: #45a049;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
            float: right;
        }

        .button2:hover {
            background-color: #008CBA;
            color: white;
        }

        .button3 {
            background-color: white;
            color: black;
            border: 2px solid #f44336;
            position: absolute;
            top: auto;
            left: auto;

        }

        .button3:hover {
            background-color: #f44336;
            color: white;
        }

        .description {
            padding: 20px;
            text-align: center;
            color: #1a202c;
            background-color: white;
            padding: 16px 32px;
            margin: 4px 2px;
            cursor: pointer;

            border: 2px solid #008CBA;
            float: right;


        }

        .description:hover {
            background-color: #f44336;
            color: white;

        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px lavender;
            width: 200px;
            justify-content: center;
            margin: auto;
            display: block;
            position: relative;
            top: 100px;


        }

        label {
            display: grid;
            padding: 0;
            margin-bottom: 8px;
            text-align: justify;
            position: center;
            width: 100%;
        }

        .submit {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
            margin: 10px;

        }

        .submit:hover {
            background-color: #008CBA;
            color: white;

        }


    </style>
</head>
<body>
<a href="{{route('our_info')}}"button class=" button button2">About US</a>
@csrf


<button class=" button button1" onclick='document.getElementById("demo").innerHTML = "welcome!"'> Home</button>
<a href="{{route('connect')}}"button class=" button button3">CONTACT</a>
@csrf



<button class="description"> Log In</button>


<form method="post" action="{{route('register')}}">
@csrf
    <label for="username">Username:</label>
    <input type="text" name="username" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>

    <button class="submit">Register</button>

</form>


</body>
</html>
