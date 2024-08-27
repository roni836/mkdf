<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function manageOrder(){
        return view('admin.manageOrder');
    }

    public function insertOrder(){
        return view('admin.insertOrder');
    }

    public function manageFranchise(){
        return view('admin.manageFranchise');
    }

    public function insertFranchise(){
        return view('admin.insertFranchise');
    }

    public function login(){
        return view('admin.auth.login');
    }

    
    
}
