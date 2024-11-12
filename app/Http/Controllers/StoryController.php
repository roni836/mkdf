<?php

namespace App\Http\Controllers;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $data = Story::orderBy('created_at', 'desc')->get();
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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'image' => 'required|image|max:10240',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }

        // Handle the file upload
        if ($request->hasFile('image')) {
            $image = time() . "." . $request->image->extension();
            $request->image->move(public_path("image/story"), $image);
        } else {
            return response()->json([
                'status' => 422,
                'errors' => ['image' => 'Image is required.']
            ], 422);
        }

        // Create the blog post
        $blog = Story::create([
            'title' => $request->title,
            'link' => $request->link,
            'organised_by' => $request->organised_by,
            'description' => $request->description,
            'image' => $image
        ]);

        if ($blog) {
            return response()->json([
                'status' => 200,
                'message' => 'Data Added Successfully'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "Unable to add your Request"
            ], 500);
        }
    }

    public function detailStory(){
        return view('home.detail-story-page');
    }
}
