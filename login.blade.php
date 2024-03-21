<html lang="en">
<head>

    <title>Log in Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #7731D8;
            margin: 0;
            padding: 0;
            display: grid;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            width: 100%;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px lavender;
            width: 400px;
        }

        label {
            display: block;
            margin-bottom:8px;}

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid;
            border-radius: 4px;
        }

       #login_button {
            background-color: #4caf50;
            color: black;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
           text-decoration: none;
        }

        button:hover {
            background-color: #45a049;
            color: #e2e8f0;

        }


    </style>

</head>
<body>


<form method="GET" action="{{route('login')}}">


    <label for="username">Username:</label>
    <input type="text"  name="username" >

    <label for="email">Email:</label>
    <input type="email"  name="email" >

    <label for="password">Password:</label>
    <input type="password"  name="password" >
    <a href="{{route('studentList')}}" class="submit" id="login_button">Log in</a>


</form>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#login_button').on('click', function () {
            ajax_login()
        })

        function ajax_login() {
            $.ajax({
                url: '/ajax_login',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    name: $('#name').val(),
                    email: $('.email').val(),
                    phone_no: $('#phone_no').val(),
                    password: $('.password').val(),
                },
                success: function (response) {
                    // console.log('OTP sent successfully:', response);
                    // alert('OTP sent successfully. Check your mobile for the OTP.');

                    alert(response.message);
                },
                error: function (error) {
                    // console.error('Error sending OTP:', error);
                    alert('Error Occurred!');
                }


            });
            $('#student-table').studentTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('studentTable') }}",
                columns: [
                    {data: 'user_id', name: 'user_id'},
                    {data: 'user_name', name: 'user_name'},
                    {data: 'email', name: 'email'},
                    {data: 'phone_no', name: 'phone_no'},
                    {data: 'action', name: 'action'},
                ]
            });
        }
    });






</script>
