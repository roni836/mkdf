<?php

namespace App\Http\Controllers;

use App\Mail\EventMail;
use App\Mail\FranchiseMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Needy;
use App\Models\Donation;
use App\Models\DonationConcern;
use App\Models\DonatingEvent;
use Validator;


class CommonController extends Controller
{
    public function needyIndex()
    {
        $data = Needy::orderBy('created_at', 'desc')->get();
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

    public function needyStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',                   
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',                   
            'help_type' => 'required|string',                   
            'location' => 'required|string',                   
        ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'errors' => $validator->messages()
                ], 422);
            }
        else {    

                // Handle the file upload
            if ($request->hasFile('image')) {
                $image = time() . "." . $request->image->extension();
                $request->image->move(public_path("needy/image"), $image);
            } else {
               $image = NULL;
            }

            $data = Needy::create([
                'name' => $request->name,                                       
                'mobile' => $request->mobile,
                'location'=>$request->location,                                       
                'needy_name'=>$request->needy_name,                                       
                'needy_mobile'=>$request->needy_mobile,                                       
                'help_type'=>$request->help_type,                                       
                'message'=>$request->message,  
                'image'=>$image  
            ]);
    
            if ($data) {

                // Mail::to('ronitsaha836@gmail.com')->send(new FranchiseMail($data));

                return response()->json([
                    'status' => 200,
                    'message' => 'We Will Connect You Soon'
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add your Request"
                ], 500);
            }
        }
    }
    public function donationConcernIndex()
    {
        $data = DonationConcern::orderBy('created_at', 'desc')->get();
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

    public function donationConcernStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',                   
            'father' => 'required|string',                   
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',                   
            'id_number' => 'required|string',                   
            'amount' => 'required|string',                   
            'heading' => 'required|string',                   
            'description' => 'required|string',                   
            'address' => 'required|string',                   
        ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'errors' => $validator->messages()
                ], 422);
            }
        else {    

                // Handle the file upload
            if ($request->hasFile('id_proof')) {
                $id_proof = time() . "." . $request->id_proof->extension();
                $request->id_proof->move(public_path("donation-concern/id_proof"), $id_proof);
            } else {
               $id_proof = NULL;
            }
                // Handle the file upload
            if ($request->hasFile('image')) {
                $image = time() . "." . $request->image->extension();
                $request->image->move(public_path("donation-concern/image"), $image);
            } else {
               $image = NULL;
            }
                // Handle the file upload
            if ($request->hasFile('document')) {
                $document = time() . "." . $request->document->extension();
                $request->document->move(public_path("donation-concern/document"), $document);
            } else {
               $document = NULL;
            }

            $data = DonationConcern::create([
                'name' => $request->name,                                       
                'mobile' => $request->mobile,                                      
                'description'=>$request->description,  
                'heading'=>$request->heading,  
                'address'=>$request->address,  
                'father'=>$request->father,  
                'id_number'=>$request->id_number,  
                'amount'=>$request->amount,  
                'image'=>$image,
                'document'=>$document,  
                'id_proof'=>$id_proof,  
            ]);
    
            if ($data) {

                // Mail::to('ronitsaha836@gmail.com')->send(new FranchiseMail($data));

                return response()->json([
                    'status' => 200,
                    'message' => 'We Will Connect You Soon'
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add your Request"
                ], 500);
            }
        }
    }
    public function donatingEventIndex()
    {
        $data = DonatingEvent::orderBy('created_at', 'desc')->get();
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

    public function donatingEventHeading()
    {
        $data = DonatingEvent::where('status', 1)->get();
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

    public function donatingEventStore(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'title' => 'required|string',                                     
            'description' => 'required|string',                   
        ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'errors' => $validator->messages()
                ], 422);
            }
        else {    

                // Handle the file upload
            if ($request->hasFile('image')) {
                $image = time() . "." . $request->image->extension();
                $request->image->move(public_path("donating-event/image"), $image);
            } else {
               $image = NULL;
            }

            $data = DonatingEvent::create([
                'title' => $request->title,                                      
                'message' => $request->message,                                      
                'description'=>$request->description,  
                'image'=>$image,
            ]);
    
            if ($data) {

                // Mail::to('ronitsaha836@gmail.com')->send(new FranchiseMail($data));

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
    }
    public function donationIndex()
    {
        $data = Donation::orderBy('created_at', 'desc')->get();
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

    public function donationStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',                   
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',                   
            'donating_for' => 'required|string',                   
            'amount' => 'required',                   
        ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'errors' => $validator->messages()
                ], 422);
            }
        else {

            $data = Donation::create([
                'name' => $request->name,                                       
                'mobile' => $request->mobile,                                      
                'donating_for' => $request->donating_for,                                      
                'amount' => $request->amount,                                      
                'address' => $request->address,                                      
                'message'=>$request->message,  
                'show_data'=>$request->show_data,  
            ]);
    
            if ($data) {

                // Mail::to('ronitsaha836@gmail.com')->send(new FranchiseMail($data));

                return response()->json([
                    'status' => 200,
                    'message' => 'Thanku For Your Donation'
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add your Request"
                ], 500);
            }
        }
    }

    public function blogIndex()
    {
        $data = Blog::orderBy('created_at', 'desc')->get();
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

    public function blogStore(Request $request)
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
            $request->image->move(public_path("blog/image"), $image);
        } else {
            return response()->json([
                'status' => 422,
                'errors' => ['image' => 'Image is required.']
            ], 422);
        }

        // Create the blog post
        $blog = Blog::create([
            'title' => $request->title,
            'link' => $request->link,
            'description' => $request->description,
            'image' => $image
        ]);

        if ($blog) {
            return response()->json([
                'status' => 200,
                'message' => 'Blog Added Successfully'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "Unable to add your Request"
            ], 500);
        }
    }

    public function eventIndex()
    {
        $event = Event::orderBy('created_at', 'desc')->get();
        if ($event->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $event
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }

    public function eventBooking(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',                   
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',                   
            'address' => 'required|string',                   
            'event_type' => 'required|string',                   
            'booking_date' => 'required',                   
            'quantity' => 'required|integer|min:10',
        ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'errors' => $validator->messages()
                ], 422);
            }
        else {    
            $event = Event::create([
                'name' => $request->name,                                       
                'mobile' => $request->mobile,
                'address'=>$request->address,                                       
                'quantity'=>$request->quantity,                                   
                'event_type'=>$request->event_type,                                      
                'booking_date'=>$request->booking_date,                                      
            ]);
    
            if ($event) {
                Mail::to('ronitsaha836@gmail.com')->send(new EventMail($event));

                return response()->json([
                    'status' => 200,
                    'message' => 'We Will Connect You Soon'
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add your Request"
                ], 500);
            }
        }
    }
    public function ratingIndex()
    {
        $rating = Rating::orderBy('created_at', 'desc')->get();
        if ($rating->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $rating
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }

    public function ratingStore(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',                   
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',                   
            'rate' => 'required',                   
        ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 422,
                    'errors' => $validator->messages()
                ], 422);
            }
        else {    
            $rating = Rating::create([
                'name' => $request->name,                                       
                'mobile' => $request->mobile,
                'rate' => $request->rate,
                'comment' => $request->comment,                                                    
            ]);
    
            if ($rating) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Your Review Is Very Precious For Us'
                ]);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => "Unable to add your Request"
                ], 500);
            }
        }
    }

    public function updateRating(Request $request, int $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',                   
            'mobile' => 'required|digits:10|regex:/^[0-9]{10}$/',                   
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'errors' => $validator->messages()
            ], 422);
        }
        else {
            $rating = Rating::find($id);
            if($rating){
                $rating->update([
                    'name' => $request->name,                                       
                    'mobile' => $request->mobile,
                    'comment' => $request->comment,   
                    'status' => $request->status  
                ]);
                return response()->json([
                    'status' => 200,
                    'message' => "Rating Updated Successfully"
                ], 200);
            }
            else {
                return response()->json([
                    'status' => 500,
                    'message' => "No Data Found"
                ], 500);
            }
        }
    }

    public function showRating($id)
    {
        $data = Rating::find($id);
        if($data){
            return response()->json([
                'status' => 200,
                'data' => $data
            ], 200);
        }
        else{
            return response()->json([
                'status' => 404,
                'message' => "No Data Found"
            ], 404);
        }
    }

    // public function update(Request $request, int $id)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string',
    //         'features' => 'required|string|min:3',
    //         'price' => 'required|string',   
            
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => 422,
    //             'error' => $validator->messages()
    //         ], 422);
    //     } else {
    //         $hirePlan = HirePlan::find($id);
    //         if ($hirePlan) {
    //             $hirePlan->update([
    //                 'name' => $request->name,
    //                 'features' => $request->features,
    //                 'price' => $request->price,                      
    //             ]);

    //             return response()->json([
    //                 'status' => 200,
    //                 'message' => "Hiring Plan Updated Successfully"
    //             ], 200);
    //         } else {
    //             return response()->json([
    //                 'status' => 500,
    //                 'message' => "No Plan Found"
    //             ], 500);
    //         }
    //     }
    // }

}