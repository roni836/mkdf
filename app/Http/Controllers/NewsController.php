<?php

namespace App\Http\Controllers;
use App\Models\News;
use Validator;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function updateStatus(Request $request, int $id){
        $job = News::find($id);
            if($job){
            $data = $job->update([
                'status' => $request->status,   
            ]);
            // dd($data);
            if($data){
                return response()->json([
                    'status' => 200,
                    'message' => "Updated Successfully"
                ], 200);
            }
        }
        return response()->json([
            'status' => 400,
            'message' => "Error Updating Job Status"
        ], 400);
    }
}
