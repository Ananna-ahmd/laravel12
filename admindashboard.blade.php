<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
           background-color: #008CBA;
            padding-top: 20px;
        }

        .sidebar h2 {
            color: #fff;
            text-align: center;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 8px 16px;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
        }

        .sidebar ul li a:hover {
            background-color: #555;
        }

        .sidebar ul li a.active {
            background-color: #4CAF50;
        }

        .content {
            margin-left: 250px;
            padding: 16px;
        }
        .cards{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            background-color: #9F191F;
            width: 48%;
            margin-bottom: 20px;

            border-radius: 5px;
            overflow: hidden;
        }

    </style>
</head>
<body>
<div class="sidebar">
    <h2>Admin Dashboard</h2>
    <ul>
        <li><a href="#" class="active">Dashboard</a></li>
        <li><a href="{{route('studentList')}}">Students</a></li>
        <li><a href="#">Courses</a></li>
        <li><a href="#">Content</a></li>
        <li><a href="#">Assessments</a></li>
    </ul>
    <a href="{{route('e_learning_home')}}" >Homepage</a>
</div>

<div class="content">

    <p>Welcome to the admin dashboard.</p>

    <div class="cards">
        <div class="card-body">
            <h3>Courses</h3>
            <p> 5
                <br>View </br>
            </p>

        </div>
        <div class="cards">
        <div class="card-body">
            <h3>Students</h3>
            <p> 30
                <br>View </br>
            </p>

        </div>
        </div>

</div>
</div>
<a href="{{route('e_learning_home')}}" >Homepage</a>
<script ></script>
</body>
</html>

