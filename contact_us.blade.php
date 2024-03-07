<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1{
            font-size:3rem;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;

        }
        form{
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;

            top:20%


        }
        .feedback-button {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);



        }
        .button {
            display: inline-block;
            padding: 15px 30px;
            font-size: 16px;
            text-decoration: none;
            color: #fff;
           background-color: #45a049;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<header>
    <h1>How Can We help?</h1>
</header>
<form action="/search" method="GET">
    <label for="search"></label>
    <input type="text" id="search" name="search" placeholder="Search...">
    <button type="submit">Search</button>
</form>
<body>
<div class="feedback-button">
    <a href="#" class="button">Send Feedback</a>
</div>
</body>
