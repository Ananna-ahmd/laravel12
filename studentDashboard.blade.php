<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
  <style>
    /* Basic CSS styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 1200px;
      margin: 20px auto;
      padding: 0 20px;
    }

    .header {
      background-color:#3498db;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .dashboard {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;
    }

    .card {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .card h2 {
      margin-top: 0;
    }

    .card p {
      margin-bottom: 0;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Student Dashboard</h1>
  </div>
  <div class="container">
    <div class="dashboard">
      <div class="card">
        <h2>My Courses</h2>
        <p>You are enrolled in 5 courses.</p>
        <a href="#">View Courses</a>
      </div>
      <div class="card">
        <h2>Assignments</h2>
        <p>You have 3 pending assignments.</p>
        <a href="#">View Assignments</a>
      </div>
      <div class="card">
        <h2>Quiz</h2>
        <p>Your current GPA is 3.7.</p>
        <a href="#">View Marks</a>
      </div>
    </div>
  </div>
</body>
</html>
