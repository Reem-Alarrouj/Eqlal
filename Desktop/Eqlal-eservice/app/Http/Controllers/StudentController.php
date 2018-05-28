<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'name' => 'required|string',
            'mobile' => 'required|integer',
            'email' => 'required|string',
            'university' => 'required|string',
            'building_number' => 'required|string',
            'semester' => 'required|integer',
            'schedule'=> 'required|string',
            
        ]);

        $student                          =  new Student();

        $student->name                    = $request->name;
        $student->mobile                  = $request->mobile;
        $student->email                   = $request->email;
        $student->university              = $request->university;
        $student->building_number         = $request->building_number;
        $student->semester                = $request->semester;
        $student->schedule                = $request->schedule;

        $student->status                  = 1;

        $student->save();
         return redirect()->back()->withFlashSuccess('done');
        
         
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
