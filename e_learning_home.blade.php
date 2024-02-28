<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Platform</title>
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

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            top:50px;
        }

        h1 {
            color: #008CBA;
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

    </style>
</head>

<header>

    <h1>A3 School</h1>

    <nav>


        <a href="#home">Home</a>
        <a href="#courses">Courses</a>
        <a href="#contact">Contact</a>



    </nav>

</header>
<a href="{{route('login')}}" class="button">Log in</a>



<section>
    <h2>Our Courses</h2>

    <div class="courses">
        <div class="course">
            <img src="course1.jpg" alt="Course 1">
            <div class="course-info">
                <h3>Introduction to Web Development</h3>
                <p>Learn the basics of HTML, CSS, and JavaScript.</p>
            </div>
        </div>

        <div class="course">
            <img src="course2.jpg" alt="Course 2">
            <div class="course-info">
                <h3>Data Science Fundamentals</h3>
                <p>Explore the world of data and analytics.</p>
            </div>
        </div>

        <!-- Add more courses as needed -->
    </div>
</section>

<footer>
    <p>&copy; 2024 A3 School</p>
</footer>
</body>
</html>

