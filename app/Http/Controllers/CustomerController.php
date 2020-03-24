<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Customer;

class CustomerController extends Controller
{
    /*public function viewemployee()
    {
        $Employees = DB::table('Employees')->get();
        return view('employee.viewemployee')->with('Employees' , $Employees);
    }*/

    
    public function addcustomer()
    {
        $Plans = DB::table('Plans')->get();
        return view('customer.addcustomer')->with('options' , $Plans);
    }

    
    public function addcustomerp(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'region' => 'required',
            'business' => 'required',
            'plan' => 'required',
            'expireddate' => 'required',
        ]);

        $Customer = Customer::create([
            'name' => $request->input('name'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'region' => $request->input('region'),
            'business' => $request->input('business'),
            'plan_id' => $request->input('plan'),
            'expireddate' => $request->input('expireddate'),
        ]);
        if($Customer->save()){
            return redirect('addcustomer')->with('message', 'Added Successfully!');
        }
        return view('customer.addcustomer');
    }

    
    /*public function editemployee($id)
    {
        $Employee = DB::table('Employees')->where('id', $id)->first();
        return view('employee.editemployee')->with('Employee', $Employee);
    } 
    
    public function editemployeep(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'region' => 'required',
        ]);

        $Employee = Employee::where('id' , '=' , $request->input('id'))->update([
            'name' => $request->input('name'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email'),
            'region' => $request->input('region'),
        ]);
        if($Employee = 1){
            return redirect('viewemployee')->with('message', 'Updated Successfully!');
        }
        return view('employee.viewemployee');
    }

   
    public function deleteemployee($id)
    {
        $Employee = Employee::where('id', $id)->first();
        if($Employee != null){
            $Employee->delete();
        }
        if($Employee = 1){
            return redirect('viewemployee')->with('message', 'Deleted Successfully!');
        }
        return view('employee.viewemployee');
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
    }*/
}
