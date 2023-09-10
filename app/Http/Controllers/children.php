<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class children extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    { 
        $userId = Auth::user()->id;
        $child =DB::select('select * from users where  id = '.$userId);
        return view('pages.addchildren', compact('child',));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->c_name;
        $age = $request->c_age;
        $date_of_birth = $request->c_date_of_birth;
        $place_of_birth = $request->c_place_of_birth;
        $gender = $request->c_gender;
        $u_id = $request->u_id;
        
        
        DB::select('INSERT INTO children(c_name,age,date_of_birth,place_of_birth,gender,u_id)
        VALUES("'.$name.'", '.$age.', "'. $date_of_birth .'", "'. $place_of_birth.'","'.$gender.'",'.$u_id.')');

     $child =DB::select('select * from children');
    return view('pages.addchildren', compact('child',));
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}