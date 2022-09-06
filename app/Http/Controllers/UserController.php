<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // public function index(){


    //     $student = array(
    //         'name' => 'Deepak',
    //         'Roll_no' => '45',
    //         'Class' => '6th',
    //         'City' => 'Noida',
    //         'Mobile_no' => '7488717871',
    //         'email' => 'deepakjerry123@gmail.com'
    //         );

    //     return view('index', compact('student'));

    // }


    public function index()
    {
        $users = [
        	[ 'id' => 1,'name' => 'Hardik'],
        	[ 'id' => 2,'name' => 'Vimal'],
        	[ 'id' => 3, 'name' => 'Harshad'],
        ];

        return view('index', compact('users'));
    }




    // public function calculation($id){




    //     return 'Hello' .' '. $id;

    // }
}
