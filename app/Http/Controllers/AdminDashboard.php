<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function adminDashboard()
    {
        return view('admin.admindashboard');
    }

    public function totalusers(){
        return view('admin.users');
    }

    public function addproduct(){
        return view('admin.addproduct');
    }

    }
