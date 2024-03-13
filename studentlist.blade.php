<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<h2>Student List</h2>
<table>
    <thead>
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Course Name</th>
        <th>Course ID</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Ananna </td>
        <td>Data Science</td>
        <td>DS101</td>
    </tr>
    <tr>
        <td> 2 </td>
        <td>Jane Smith</td>
        <td>Python</td>
        <td>PHYS201</td>
    </tr>
    <tr>
        <td>3 </td>
        <td>Alice Johnson</td>
        <td>Computer Science</td>
        <td>CSCI301</td>
    </tr>
    <tr>
        <td>4 </td>
        <td>Ahmed</td>
        <td>Web Development</td>
        <td>WBI301</td>
    </tr>

    <!-- Add more rows for additional students -->
    </tbody>
</table>
</body>
</html>

