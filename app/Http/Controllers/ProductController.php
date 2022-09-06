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

        return redirect('/datalist')->with('status', 'Student Registered !!');

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
        return view('view')->with('viewdata',$viewdata);


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

    public function update(Request $request, $id)
    {
        //
        $name = $request->input('name');
        $email = $request->input('email');
        $class = $request->input('class');
        $Mobile = $request->input('Mobile');
      DB::update('update students set class = ?,name=?,Mobile= ? where id = ?',[$class,$name,$Mobile,$id]);

      return redirect('/datalist')->with('status', 'Student Profile Updated!');

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
        return redirect('/datalist')->with('status', 'Student Profile has been delated !');


    }
    // public function chart()
    // {
    //     $users = Student::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
    //                 ->whereYear('created_at', date('Y'))
    //                 ->groupBy(DB::raw("Month(created_at)"))
    //                 ->pluck('count', 'month_name');

    //     $labels = $users->keys();
    //     $data = $users->values();

    //     return view('chart', compact('labels', 'data'));
    // }
}
