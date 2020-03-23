<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Plan;



class PlanController extends Controller
{
    
    public function createplan()
    {
        return view('plan.createplan');
    }

    public function createplanp(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'speed' => 'required',
            'cost' => 'required',
            'duration' => 'required',
        ]);

        $Plan = Plan::create([
            'name' => $request->input('name'),
            'speed' => $request->input('speed'),
            'cost' => $request->input('cost'),
            'duration' => $request->input('duration'),
        ]);
        if($Plan->save()){
            return redirect('createplan')->with('message', 'Added Successfully!');
        }
        return view('plan.createplan');
    }
}
