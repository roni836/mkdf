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
    
    public function manageDonatingEvent(){
        return view('admin.manageDonatingEvent');
    }

    public function insertPhotos(){
        return view('admin.insertPhotos');
    }
    
    public function managePhotos(){
        return view('admin.managePhotos');
    }

    public function insertVideos(){
        return view('admin.insertVideos');
    }
    
    public function manageVideos(){
        return view('admin.manageVideos');
    }

    public function insertDonatingEvent(){
        return view('admin.insertDonatingEvent');
    }

    public function insertDonationPage(){
        return view('admin.insert-donation-page');
    }

    public function manageDonationPage(){
        return view('admin.manage-donation-page');
    }

    public function insertOrder(){
        return view('admin.insertOrder');
    }

    public function manageFranchise(){
        return view('admin.manageFranchise');
    }

    public function insertEvents(){
        return view('admin.insertEvents');
    }

    public function manageEvents(){
        return view('admin.manageEvents');
    }

    public function insertNews(){
        return view('admin.insertNews');
    }

    public function manageNews(){
        return view('admin.manageNews');
    }

    public function insertFranchise(){
        return view('admin.insertFranchise');
    }

    public function manageHeading(){
        return view('admin.manageHeading');
    }

    public function insertHeading(){
        return view('admin.insertHeading');
    }

    public function login(){
        return view('admin.auth.login');
    }

    
    
}
