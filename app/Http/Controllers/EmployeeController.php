<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewemployee()
    {
        $Employees = DB::table('Employees')->get();
        return view('employee.viewemployee')->with('Employees' , $Employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addemployee()
    {
        return view('employee.addemployee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addemployeep(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'region' => 'required',
        ]);

        $Employee = Employee::create([
            'name' => $request->input('name'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'region' => $request->input('region'),
        ]);
        if($Employee->save()){
            return redirect('addemployee')->with('message', 'Added Successfully!');
        }
        return view('employee.addemployee');
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

    public function searchemployee(Request $request)
    {
        $Employees = Employee::Where('name', 'like' , '%'.$request->input('query').'%')
        ->orwhere('contact', 'like' , '%'.$request->input('query').'%')
        ->orWhere('email', 'like' , '%'.$request->input('query').'%')
        ->orWhere('region', 'like' , '%'.$request->input('query').'%')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('employee.viewemployee')->with('Employees' , $Employees);
    }
}
