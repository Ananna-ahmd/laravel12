<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
            width: 100%;
            margin-top: auto;
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

        .fa {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }

        .fa:hover {
            opacity: 0.7;
        }
        .fa-facebook {
            background: #3B5998;
            color: white;
        }
        .fa-twitter {
            background: #55ACEE;
            color: white;
        }
        .fa-youtube {
            background: #bb0000;
            color: white;
        }

        .fa-instagram {
            background: #125688;
            color: white;
        }
        * {box-sizing:border-box}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
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
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="https://banner2.cleanpng.com/20180816/kvl/kisspng-website-development-web-design-vector-graphics-gra--5b75b5f6f05477.3040927215344409509844.jpg " style="width:100%">

        <div class="text">E-learning</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="https://imageio.forbes.com/specials-images/dam/imageserve/966248982/960x0.jpg?height=456&width=711&fit=bounds" style="width:100%">
        <div class="text">Know the uses of Machine Learning</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="https://imageio.forbes.com/specials-images/imageserve/615a844b0e678d9d11c5fc26/0x0.jpg?format=jpg&height=900&width=1600&fit=bounds" style="width:100%">
        <div class="text">Data Science</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>
<script>

    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
</script>



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
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
    </div>


        <p>  &copy; 2024 A3 School</p>


</footer>
</body>
</html>

