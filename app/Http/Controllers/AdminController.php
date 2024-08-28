<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function manageNeedy(){
        return view('admin.manageNeedy');
    }

    public function insertNeedy(){
        return view('admin.insertNeedy');
    }
    
    public function manageDonation(){
        return view('admin.manageDonation');
    }

    public function insertDonation(){
        return view('admin.insertDonation');
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
