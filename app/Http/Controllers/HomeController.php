<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\Video;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function photo()
    {
        $photo = Gallery::where('status',1)->get();
        $video = Video::where('status',1)->get();
        return view("home.gallery", compact('photo','video'));
    }

    public function videoIndex()
    {
        $data = Video::orderBy('created_at', 'desc')->where('status',1)->get();
        if ($data->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $data
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }

    public function orderPage(){
        return view('home.orderNow');
    }

    public function career(){
        return view('home.career');
    }
    
    public function appliedCareer(){
        return view('home.appliedCareer');
    }

    public function blog(){
        return view('home.blog');
    }

    public function whyUs(){
        return view('home.whyUs');
    }

    public function brandStory(){
        return view('home.brandStory');
    }

    public function franchiseQuery(){
        return view('home.franchiseQuery');
    }

    public function bookEvent(){
        return view('home.bookEvent');
    }

    public function cartLocator(){
        return view('home.cartLocator');
    }
}
