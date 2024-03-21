<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Dashboard</title>
    <style>
        /* Basic styles for the dashboard */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .card {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .card h2 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
            color: #666;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Instructor Dashboard</h1>
    <div class="card">
        <h2>Course Management</h2>
        <p>Manage your courses, create new courses, and update existing ones.</p>
        <a href="/courses" class="btn">Manage Courses</a>
    </div>
    <div class="card">
        <h2>Student Tracking</h2>
        <p>Track the progress of your students, review assignments, and provide feedback.</p>
        <a href="/students" class="btn">View Students</a>
    </div>
    <div class="card">
        <h2>Earnings Overview</h2>
        <p>View your earnings, payment history, and revenue trends.</p>
        <a href="/earnings" class="btn">View Earnings</a>
    </div>
</div>
</body>
</html>

