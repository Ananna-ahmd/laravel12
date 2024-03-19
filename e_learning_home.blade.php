<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section{
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            top:50px;
        }

        h1 {
          color: #45a049;
            font-family: "Kdam Thmor Pro", sans-serif;
            font-size: 3rem;
            position: absolute;

        }
        h2{
            color: #1a202c;
            font-family: Apple;
        }

        .courses {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;

        }

        .course {
            width: 48%;
            margin-bottom: 20px;
            background-color: #ecf0f1;
            border-radius: 5px;
            overflow: hidden;

        }

        .course img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .course-info {
            padding: 15px;
        }

        footer {
           background-color: #008CBA;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .button{
            background-color: #4caf50;
            color: black;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 10%;
            text-decoration: none;
            justify-content: center;
            margin: auto;
            display:block;
            position: relative;
            top: 10px;

            text-align: center;
        }
        .button:hover{
            background-color: #45a049;
            color: #e2e8f0;
        }
        nav a{
            text-decoration: none;
            color: #f7fafc;
            font-size: 1rem;
            padding: 10px 15px;
            cursor: pointer;
        }
        nav a:hover{
            background-color: #45a049;
            color: #e2e8f0;
        }
        form{
            display: inline-flex;
            position: relative;
            top: 10px;
            left: 500px;
        }
        .button1{
            display: inline-flex;
        }
        .social-icons {
            display: inline-flex;
            text-decoration: none;
            justify-contefnt: center;
            font-family: Apple;
            margin-top: 20px;
            cursor:pointer;/* Adjust as needed */
        }

        .icon {
            margin: 0 10px; /* Adjust the space between icons as needed */
           color: #e2e8f0;/* Adjust icon color */
            font-size: 24px; /* Adjust icon size */
            transition: color 0.3s ease;
            text-decoration: none;
            cursor: pointer;
        }

        .icon:hover {
            color: #45a049/* Change color on hover */
        }
        .fab{
            color: #1a202c;
        }
        img{
            width:100%;
        }


    </style>
</head>

<header>

    <h1>A3 School</h1>

    <nav>



        <a href="{{route('course')}}">Courses</a>
        <a href="{{route('contact_us')}}">Contact</a>
        <a href="{{route('sign_up')}}" class="button1">Sign in</a>
        <a href="{{route('login')}}" class="button1">Log in</a>



    </nav>


        <form action="/search" method="GET">
            <label for="search"></label>
            <input type="text" id="search" name="search" placeholder="Search...">
            <button type="submit">Search</button>
        </form>



</header>
<img src="https://banner2.cleanpng.com/20180816/kvl/kisspng-website-development-web-design-vector-graphics-gra--5b75b5f6f05477.3040927215344409509844.jpg">



<section>
    <h2>Our Courses</h2>

    <div class="courses">
        <div class="course">
            <img src="https://quicksolutionindia.com/wp-content/uploads/2023/02/web-development-company-1-2022.jpg" alt="Course 1">
            <div class="course-info">
                <h3>Introduction to Web Development</h3>
                <p>Learn the basics of HTML, CSS, and JavaScript.</p>
            </div>
        </div>

        <div class="course">
            <img src="https://www.compasslexecon.com/wp-content/uploads/2022/12/Data-Science-Image.jpg" alt="Course 2">
            <div class="course-info">
                <h3>Data Science Fundamentals</h3>
                <p>Explore the world of data and analytics.</p>
            </div>
        </div>

        <!-- Add more courses as needed -->
    </div>

</section>




<footer>

    <div class="social-icons">
        <a href="#"  class="icon"><i class="fa-brands fa-facebook"></i></a>
        <a href=#"  class="icon"><i class="fa-brands fa-twitter"></i>Twitter</a>
        <a href="#"  class="icon"><i class="fab fa-instagram"></i>Instagram</a>
    </div>


        <p>  &copy; 2024 A3 School</p>
    <a href="{{route('adminDashboard')}}" >Admin Login</a>

</footer>
</body>
</html>

