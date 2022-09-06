<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datalist()
    {
        //  $users = DB::table('users');
        //  $users = users::all();
        // return view('datalist', compact('users'));

        $users = DB::select('select * from students');
        // print_r($users);
    return view('datalist',['users'=>$users]);


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    public function savedata(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $class = $request->input('class');
        $Mobile = $request->input('Mobile');

        $data=array(
        'name'=>$name,
        'email'=>$email,
        'class'=>$class,
        'Mobile'=>$Mobile);
        DB::table('students')->insert($data);

        return redirect('/datalist')->with('status', 'Profile Added!');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $viewdata= DB::select('select * from students where id = ?', [$id]);
        // return view('datalist',['users'=>$viewdata]);
        return view('view')->with('viewdata',$viewdata);

        // $users = DB::select('select * from students');
        // print_r($users);
    // return view('datalist',['viewdata'=>$viewdata]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $viewdata= DB::select('select * from students where id = ?', [$id]);


        // print_r($viewdata);
        return view('edit')->with('viewdata',$viewdata);





    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $name = $request->input('name');
      DB::update('update students set name = ? where id = ?',[$name,$id]);
      echo '<div class="container align-center">Record updated successfully.</div><br/>';
      echo '<a href = "/datalist">Click Here</a> to go back.';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::delete('delete from students where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/datalist">Click Here</a> to go back.';

    }
}
