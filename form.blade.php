<!DOCTYPE html>
<html>
<head>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/vendors.min.css')}}">
    <style>
        @font-face {
            font-family: boxicons;
            font-weight: 400;
            font-style: normal;
            src: url({{asset('assets/fonts/boxicons/fonts/boxicons.eot')}});
            src: url({{asset('assets/fonts/boxicons/fonts/boxicons.eot')}}) format('embedded-opentype'), url({{asset('assets/fonts/boxicons/fonts/boxicons.woff2')}}) format('woff2'), url({{asset('assets/fonts/boxicons/fonts/boxicons.woff')}}) format('woff'), url({{asset('assets/fonts/boxicons/fonts/boxicons.ttf')}}) format('truetype'), url({{asset('assets/fonts/boxicons/fonts/boxicons.svg?#boxicons')}}) format('svg');
        }
    </style>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/extensions/dragula.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/forms/select/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/pickers/pickadate/pickadate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/pickers/daterange/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/tables/datatable/datatables.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/editors/quill/katex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/editors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/css/editors/quill/quill.bubble.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/datetime/tempusdominus-bootstrap-4.min.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/components.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themes/dark-layout.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themes/semi-dark-layout.min.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Application global common -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/common.css')}}">
    <style>
        /*body {*/
        /*    font-family: Arial, sans-serif;*/
        /*    background-color: #e2e8f0;*/
        /*    margin: 0;*/
        /*    padding: 0;*/
        /*    background-image: url("https://png.pngtree.com/thumb_back/fh260/background/20230415/pngtree-website-technology-line-dark-background-image_2344719.jpg");*/
        /*    background-repeat: no-repeat;*/
        /*    background-size: cover;*/
        /*}*/

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

        /*.description {*/
        /*    padding: 20px;*/
        /*    text-align: center;*/
        /*    color: #1a202c;*/
        /*    background-color: white;*/
        /*    padding: 16px 32px;*/
        /*    margin: 4px 2px;*/
        /*    cursor: pointer;*/
        /*    border: 2px solid #008CBA;*/
        /*    float: right;*/
        /*}*/

        /*.description:hover {*/
        /*    background-color: #f44336;*/
        /*    color: white;*/
        /*}*/

        form {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px lavender;
            width: 500px;
            justify-content: center;
            margin: auto;
            display: block;
            position: relative;
            /*top: 50px;*/
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

        /*.submit {*/
        /*    background-color: white;*/
        /*    color: black;*/
        /*    border: 2px solid #008CBA;*/
        /*    margin: 10px;*/
        /*}*/

        /*.submit:hover {*/
        /*    background-color: #008CBA;*/
        /*    color: white;*/

        /*}*/

        /*#users-table {*/
        /*    width: 50%;*/
        /*    top: 120px;*/
        /*    box-sizing: border-box;*/
        /*    display: block;*/
        /*    position: relative;*/
        /*    padding: 15px;*/
        /*    border-radius: 4px;*/
        /*    background-color: bisque;*/
        /*}*/
        /*table {*/
        /*    width: 100%;*/
        /*    margin-bottom: 20px;*/
        /*}*/
    </style>
</head>
<body>

<a href="{{route('our_info')}}" class="btn btn-primary">About US</a>

<a href="{{route('index')}}" class="button button1">Home</a>

<a href="{{route('connect')}}" class="button button3">CONTACT</a>


<button class="btn btn-primary">Log In</button>

<div class="card">
    <div class="card-body">

        <form method="post" id="form" action="{{route('register')}}">
            @csrf
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control" required>

            <label for="email">Email:</label>
            <input type="email" name="email" class="email form-control" required>

            <label for="phone_no">Phone NO:</label>
            <input type="number" name="phone_no" id="phone_no" class="form-control" required>

            <label for="password">Password:</label>
            <input type="password" name="password" class="password form-control" required>

            <button type="button" class="button submit" id="register_button">Register</button>

            <button type="button" class="button submit" id="update_button">Update</button>
            <button type="button" class="button submit" id="delete_button">Delete</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body"><h4 class="card-title">Users List</h4><!---->
        <hr>
        <div class="table-responsive">
            <table id="users-table" class="table display table-sm datatable mdl-data-table dataTable">
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
        </div>
    </div>
</div>

</body>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>


<script>
    // Function to show or hide the Update button
    //function toggleUpdateButton(show) {
    //  if (show) {
    //('#update_button').show();
    // } else {
    // $('#update_button').hide();
    //}
    //}
    $(document).ready(function () {
        $('#update_button').hide()
        $('#delete_button').hide()
        // Initial state: hide the Update button
        //toggleUpdateButton(false);


        $('#register_button').on('click', function () {
            ajax_register()
            // toggleUpdateButton(false);

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
        }

        $('#update_button').on('click', function () {
            ajaxUpdate()
            $('#form')[0].reset();
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
                success: function (response) {

                    alert('update successfully');
                },
                error: function (error) {
                    // console.error('Error sending OTP:', error);
                    alert('Error Occurred!');
                }



            });

        }

        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('datatable') }}",
            columns: [
                {data: 'user_id', name: 'user_id'},
                {data: 'user_name', name: 'user_name'},
                {data: 'email', name: 'email'},
                {data: 'phone_no', name: 'phone_no'},
                {data: 'action', name: 'action'},
            ]
        });
    });

    function edit(user_id) {
        $.ajax({
            url: '/ajax-get-user-data',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                user_id: user_id
            },
            success: function (data) {
                $('#username').val(data.user_name)
                $('.email').val(data.email)
                $('#phone_no').val(data.phone_no)
                $('.password').val(data.password)

                // toggleUpdateButton(true);
                $('#register_button').hide()
                $('#update_button').show()

            },
            error: function (error) {
                alert('Error Occurred!');
            }
        });
    }
    function deleteRecord(user_id) {
        $.ajax({
            url: '/deleteUser' ,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                user_id: user_id
            },
            success: function (data) {
                $('#username').val(data.user_name)
                $('.email').val(data.email)
                $('#phone_no').val(data.phone_no)
                $('.password').val(data.password)
                //location.reload();
                alert('Delete this Record?');


                $('#register_button').hide()
                $('#delete_button').show()

            },
            error: function (error) {
                alert('Error Occurred!');
            }
        });
    }
    $('#delete_button').on('click', function () {
        deleteRecord()

    })



</script>
</html>
