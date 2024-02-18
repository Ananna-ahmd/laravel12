<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WELLL</title>
    <style>

        a.cta-button {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
        }

        a.cta-button:hover {
            background-color: #45a049;
        }
        h1{
            font-size: 3rem;
            text-align: center;
            background-color: #008CBA;
            font-family: "Baskerville Old Face";
        }
        nav{
            background-color: #45a049;
            padding: 1% 7%;
            text-align: center;
        }
        nav a{
            text-decoration: none;
            color: #f7fafc;
            font-size: 1rem;
            padding: 10px 15px;
            cursor: pointer;
        }
        .dropdown{
            display: inline;
            position: relative;
        }
        .dropdown:hover.dropdown-content{
            display: block;
        }
        .dropdown-content{
            position: absolute;
            display: none;
            top: 30px;
            right: 0px;
            background-color: #45a049;
            min-height: 100px;

        }
        .dropdown-content a{
            display: block;
        }
        .dropdown-content a:hover{
            background-color: #718096;
        }

    </style>
</head>
<body>
<header>
    <h1>Eshop</h1>
    <nav>

        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <div class="dropdown">
            <a href="#contact">Contact</a>
            <div class="dropdown-content">
                <a href="#Phone">Phone No</a>
                <a href="#email">Email</a>
            </div>
        </div>

    </nav>
</header>

<section id="home">
    <h2>Welcome to Our Website!</h2>

    <a href="{{route('form')}}" class="cta-button">Click Here</a>
</section>


<section id="about">

</section>

<section id="services">
    <h2>Our Services</h2>
    <p>
        Home Delivery
    </p>
</section>

<section id="contac">
    <h2>Contact Us</h2>
    <p>019178261</p>
</section>

<footer>
    <p>&copy; 2024 Eshop. All rights reserved.</p>
</footer>
<script src="script.js"></script>
</body>
</html>

</body>
</html>
