<?php

namespace App\Http\Controllers;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;


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
    public function homeIndex()
    {
        $data = Story::orderBy('created_at', 'desc')->where('status',1)->get();
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

    public function detailStory($slug){
        $story = Story::where('slug',$slug)->first();
        return view('home.detail-story-page',['story'=>$story]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'image' => 'required|image|max:10240',
            'date' => 'required',
            'story' => 'required|string',
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

        $slug = Str::slug($request->title, '-');

        // Create the blog post
        $blog = Story::create([
            'title' => $request->title,
            'story' => $request->story,
            'date' => $request->date,
            'slug' => $slug,
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

   

    public function updateStatus(Request $request, int $id){
        $job = Story::find($id);
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
