<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\CourseStudent;
use App\Models\User;
use App\Mail\EmailNotification;
use Mail;

class HomeController extends Controller
{
    public function studentEnrollQueryView(){
        $courselist=Course::orderBy('id','DESC')->get();
        return view('frontend.course-enroll-form',compact('courselist'));
    }
    public function studentEnrollmentQuery(Request $request){


        $validated=$request->validate([
            "name"=>'required|string|max:150',
            "email"=>'required|email|max:150|unique:users',
            'mobile_number' =>'required|regex:/^[0-9]{10}$/',
            'course_id'=>['required','not_in:0'],
        ],[
            'course_id.required'=>'course field is required to fill',
            'course_id.not_in'=>'Please select valid course option',
        ]);

        if($request->has('terms_conditions')){
            $validated['terms_conditions']=$request->terms_conditions;
        }

        // return $validated;

        $course=Course::where('id',$validated['course_id'])->exists();

        if($course){
            $userid=User::create([
               
                'name'=>$validated['name'],
                'email'=>$validated['email'],
                'mobile_number'=>$validated['mobile_number']
            ])->id;

            if($userid){
                $user=User::find($userid);
                $stored=CourseStudent::create([
                     'course_id'=> $validated['course_id'],
                     'user_id'=> $userid,
                     'terms_conditions'=>$validated['terms_conditions']??0
                ]);
                if(!empty($stored)){
                    $data=[
                        'subject'=>"Confirmation of Registration for Live Project Training",
                        "name"=>$user->name,
                        "email"=>$user->email,
                        "mobile_number"=>$user->mobile_number,
                        "course"=>Course::where('id',$validated['course_id'])->value('course_name')
                    ];

                    Mail::to(env('MAIL_USERNAME')??"dotfy9@gmail.com")
                    ->queue((new EmailNotification($data))->onQueue('emails'));
                  
				    

                 
                    session()->flash('success', 'Record created successfully!');
                    return redirect()->back();
                    
                }else{
                    session()->flash('warning', 'Internet server issue.');
                    return redirect()->back();
                }
            }
        }else{
            return response->json(['status'=>404,'msg'=>'course not found']);
        }
    }
}
