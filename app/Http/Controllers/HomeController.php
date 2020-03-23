<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class HomeController extends Controller
{
    public function Start()
    {
        $Admin = User::create([
            'name' => 'Admin',
            'email' => 'Admin@Admin.com',
            'password' => bcrypt('123456Aa_'),
        ]);

        return redirect()->route('home');
    }
    
    public function Home()
    {
        return view('/home');
    }
}
