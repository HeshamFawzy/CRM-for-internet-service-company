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
        ->join('Customers', 'Customers.id', '=', 'complaints.customer_id')
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
            'state' => '0',
        ]);
        if($Complaint->save()){
            return redirect('addcomplaint')->with('message', 'Added Successfully!');
        }
        return view('complaint.addcomplaint');
    }

    public function searchcomplaint(Request $request)
    {
        $Complaints = Complaint::join('customers', 'Complaints.customer_id', '=', 'customers.id')
        ->Where('customers.email', 'like' , '%'.$request->input('query').'%')
        ->orWhere('Complaints.date', 'like' , '%'.$request->input('query').'%')
        ->orderBy('Complaints.created_at', 'desc')
        ->get();
        return view('complaint.viewcomplaint')->with('Complaints' , $Complaints);
    }
}
