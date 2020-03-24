<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Customer;

class CustomerController extends Controller
{
    public function viewcustomer()
    {
        $Customers = DB::table('Customers')
        ->join('Plans', 'Customers.plan_id', '=', 'Plans.id')
        ->select('Customers.*', 'Plans.name as planName')
        ->get();
        return view('customer.viewcustomer')->with('Customers' , $Customers);
    }

    
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

    
    public function editcustomer($id)
    {
        $Customer = DB::table('Customers')->where('id', $id)->first();
        $Plans =  DB::table('Plans')->get();
        $Plan = DB::table('Plans')->where('id' , $Customer->plan_id)->first();
        return view('customer.editcustomer')->with('Customer' , $Customer)->with('options', $Plans)->with('plan' , $Plan);
    } 
    
    public function editcustomerp(Request $request)
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

        $Customer = Customer::where('id' , '=' , $request->input('id'))->update([
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

        if($Customer = 1){
            return redirect('viewcustomer')->with('message', 'Updated Successfully!');
        }
        return view('customer.viewcustomer');
    }

   
    public function deletecustomer($id)
    {
        $Customer = Customer::where('id', $id)->first();
        if($Customer != null){
            $Customer->delete();
        }
        if($Customer = 1){
            return redirect('viewcustomer')->with('message', 'Deleted Successfully!');
        }
        return view('customer.viewcustomer');
    }

    public function searchcustomer(Request $request)
    {
        $Customers = Customer::Where('name', 'like' , '%'.$request->input('query').'%')
        ->orwhere('contact', 'like' , '%'.$request->input('query').'%')
        ->orWhere('email', 'like' , '%'.$request->input('query').'%')
        ->orWhere('region', 'like' , '%'.$request->input('query').'%')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('customer.viewcustomer')->with('Customers' , $Customers);
    }
}
