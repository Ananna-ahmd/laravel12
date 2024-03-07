<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e2e8f0;
            margin: 0;
            padding: 0;
            background-image: url("https://png.pngtree.com/thumb_back/fh260/background/20230415/pngtree-website-technology-line-dark-background-image_2344719.jpg");
            background-repeat: no-repeat;
            background-size: cover;


        }

        .button {
            background-color: #04AA6D; /* Green */
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            padding: 16px 32px;
            display: inline-block;
            font-size: 14px;
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
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px lavender;
            width: 500px;
            justify-content: center;
            margin: auto;
            display:block;
            position: relative;
            top: 100px;


        }

        label {
            display: inline-flex;
            padding: 0;
            margin-bottom: 8px;
            text-align: justify;
            position: center;
            width: 200%;

        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid;
            border-radius: 4px;
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
        #users-table{
            width: 50%;
            top: 120px;
            box-sizing: border-box;
            display:block;
            position: relative;
            padding: 15px;
            border-radius: 4px;

            background-color: bisque;


        }
        table{
            width: 100%;
            margin-bottom: 20px;


        }


    </style>
</head>
<body>
<a href="{{route('our_info')}}" class=" button button2">About US</a>

<a href="{{route('index')}}" class=" button button1">Home</a>

<a href="{{route('connect')}}" class=" button button3">CONTACT</a>



<button class="description"> Log In</button>

<form method="post" action="{{route('register')}}">
@csrf
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>

    <label for="email">Email:</label>
    <input type="email" name="email" class="email" required>

    <label for="phone_no">Phone NO:</label>
    <input type="number" name="phone_no" id="phone_no" required>

    <label for="password">Password:</label>
    <input type="password" name="password" class="password" required>

    <button type="button" class="submit" id="register_button">Register</button>

    <button type="button"  class=" button submit" id="update_button">Update</button>


</form>
<table id="users-table" class="display">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Action</th>
    </tr>
    </thead>
</table>

</body>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>


<script>

    $('#register_button').on('click', function () {
        ajax_register()
    })

    function ajax_register() {
        $.ajax({
            url: '/ajax-register',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                username: $('#username').val(),
                email: $('.email').val(),
                phone_no: $('#phone_no').val(),
                password: $('.password').val(),
            },
            success: function(response) {
                // console.log('OTP sent successfully:', response);
                // alert('OTP sent successfully. Check your mobile for the OTP.');

                alert(response.message);
            },
            error: function(error) {
                // console.error('Error sending OTP:', error);
                alert('Error Occurred!');
            }


        });}
    $('#update_button').on('click', function () {
        ajaxUpdate()
    })

    function ajaxUpdate() {
        $.ajax({
            url: '/ajax-update',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                username: $('#username').val(),
                email: $('.email').val(),
                phone_no: $('#phone_no').val(),
                password: $('.password').val(),
            },
            success: function(response) {

                alert('update successfully');
            },
            error: function(error) {
                // console.error('Error sending OTP:', error);
                alert('Error Occurred!');
            }


        });
        }

    $(document).ready(function () {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('datatable') }}",
            columns: [
                { data: 'user_id', name: 'user_id' },
                { data: 'user_name', name: 'user_name' },
                { data: 'email', name: 'email' },
                { data: 'phone_no', name: 'phone_no' },
                { data: 'action', name: 'action' },
            ]
        });
    });

</script>
</html>
