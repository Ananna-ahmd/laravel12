<?php

namespace App\Http\Controllers;
use App\Models\TestStudent;

use App\Models\TestUser;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function e_learning_home()

    {
        return view('e_learning_home');

    }
    public function login(Request $request){

        return view('login');

    }
    public function sign_up(){
        return view('sign_up');
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $results = Course::where('title', 'like', "%$query%")->get();

        return view('search.results', compact('results'));
    }
    public function course(){
        return view('course');

    }
    public function contact_us(){
        return view('contact_us');

    }
    public function ajax_login(Request $request){
       // dd($request);
       // $user = TestStudent::all();

       $user = new TestStudent();
        $user->test_student_id = '5';
        $user->name = 'Maria';
        $user->email = 'maria@gmail.com';
        $user->phone_no = '01891499';
        $user->insert_date = today();
        $user->password = $request->password;

       /* $user->test_student_id = TestStudent::max('test_student_id ') + 1;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_no = $request->phone_no;
        $user->insert_date = today();
        $user->password = $request->password;*/

        $user->save();




    }
    public function adminDashboard(){
        // dd($request);

        return view('adminDashboard');

    }
    public function studentList(){
        // dd($request);

        return view('studentList');

    }

    public function studentDashboard(){
        // dd($request);

        return view('studentDashboard');

    }
    public function instructorDashboard(){
        // dd($request);

        return view('instructorDashboard');

    }
    public function studentTable()
    {
        $userData = TestStudent::all();

        return datatables()->of($userData)
            ->addColumn('action', function ($data) {
                return '<a href="javascript:void(0)" onclick="edit(' . $data->user_id . ')"><i class="bx bx-edit cursor-pointer"></i></a>'.
                    '<a href="javascript:void(0)" onclick="deleteRecord(' . $data->user_id . ')"><i class="bx bx-trash cursor-pointer"></i></a>';
            })
            ->make(true); // Assuming you have an 'action' column in your view
    }
    public function payment()
    {
        // Fetch and pass payment options to the view
        $payment = [
            'paypal' => 'PayPal',
            'stripe' => 'Stripe',
            // Add more payment options here
        ];

        return view('payment', compact('payment'));
    }




}
