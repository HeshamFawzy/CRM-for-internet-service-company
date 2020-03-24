<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Customer;

use App\Complaint;

class ComplaintController extends Controller
{
    public function viewcomplaint()
    {
        $Complaints = DB::table('complaints')
        ->get();
        return view('complaint.viewcomplaint')->with('Complaints' , $Complaints);
    }

    
    public function addcomplaint()
    {
        $Customers = DB::table('Customers')->get();
        return view('complaint.addcomplaint')->with('options' , $Customers);
    }

    
    public function addcomplaintp(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required',
            'text' => 'required',
            'date' => 'required',
        ]);

        $Complaint = Complaint::create([
            'customer_id' => $request->input('email'),
            'text' => $request->input('text'),
            'date' => $request->input('date'),
        ]);
        if($Complaint->save()){
            return redirect('addcomplaint')->with('message', 'Added Successfully!');
        }
        return view('complaint.addcomplaint');
    }
}
