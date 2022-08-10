<?php

namespace App\Http\Controllers;

use App\Models\Blogger;
use App\Models\Blog;
use App\Http\Requests\StoreBloggerRequest;
use App\Http\Requests\UpdateBloggerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\bloggerRegConfirmation;
use DateTime;


class BloggerController extends Controller
{

    public function bloggerCreateSubmit(Request $request){

        $validate = $request->validate([
              "fname"=>'required|max:20',
              "gender"=>"required",
              'dob'=>'required|date',
              "address"=>"required",
              'email'=>'required|email',
              'username'=>'required|min:5',
              'password'=>'required|min:4|max:15|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{5,20}$/',
              
          ],
          ['fname.required'=>"The Full Name field is required.",
          'fname.max'=>"The Full Name field is access max 20 alphabet.",
          'address.required'=>"The Address field is required.",
          'password.regex'=>"Please use atleast 1 uppercase, 1 lowercase, 1 special charactee, 1 number"]
      );
      $status = "pending";
      $pass=$request->password;
      $cpass=$request->cpassword;

      if ($cpass == $pass)  
      {
  
      $userCheck = Blogger::where('username',$request->username)->first();
      if($userCheck){
  
          return redirect()->back()->with('failed', 'Username already exist');
      }
      else{
        $image = $request->file('image')->getClientOriginalName();
        
  
          $blogger = new Blogger();
          $blogger->name = $request->fname;
          $blogger->gender = $request->gender;
          $blogger->dob = $request->dob;
          $blogger->address = $request->address;
          $blogger->email = $request->email;
          $blogger->status = $status;
          $blogger->username = $request->username;
          $request->session()->put('username',$request->username);
          $blogger->password = md5($request->password);
          $blogger->image = $image;
          $code = rand(1000,9000);
          $details = [
              'title' => 'Registration Confirmation',
              'code' => $code
          ];
          $blogger->otp = $code;

          Mail::to($request->email)->send(new bloggerRegConfirmation($details));
          $result = $blogger->save();
          if($result){
              $folder = $request->file('image')->move(public_path('img').'/',$image);
              return redirect()->route('bloggerOtp');
          }
          else{
              return redirect()->back()->with('failed', 'Registration Failed');
          }
      }
  
      }
      else{
        return redirect()->back()->with('failed', 'Confirm Password doesnt match with password');
    }
    }


    public function otpsend (Request $request){
        $validate = $request->validate([
            'otp'=>'required',
        ]);
    $status = "Approve";
    $user = Blogger::where('username',session()->get('username'))->first();

    if($user->otp === $request->otp){
        $user->otp = "";
        $user->status = $status;
        $user->save();
        return  redirect()->route('bloggerLogin');
    }
    else{
        return redirect()->back()->with('failed', 'Wrong OTP');
    }

    }

    public function bloggerLoginSubmit(Request $request){

    $loginCheck = Blogger::where('username',$request->username)->where('password',md5($request->password))->first();

    if($loginCheck){
        if($loginCheck->status == "Approve")
        {
            $request->session()->put('id',$loginCheck->id);
            $request->session()->put('name',$loginCheck->name);
            $request->session()->put('gender',$loginCheck->gender);
            $request->session()->put('dob',$loginCheck->dob);
            $request->session()->put('email',$loginCheck->email);
            $request->session()->put('peraddress',$loginCheck->address);
            $request->session()->put('username',$loginCheck->username);
            $request->session()->put('password',$loginCheck->password);
            $request->session()->put('image',$loginCheck->image);
            return  redirect()->route('bloggerDash');
        }
        else{
            return redirect()->back()->with('failed', 'Your Registered id is in observation, Please wait for Admins approval');
        }
    }
    else{
        return redirect()->back()->with('failed', 'Invalid username or password');
    }
    }

    public function logout(){
        session()->forget('id');
        session()->forget('name');
        session()->forget('gender');
        session()->forget('dob');
        session()->forget('email');
        session()->forget('address');
        session()->forget('username');
        session()->forget('password');
        session()->forget('image');
        return redirect()->route('bloggerLogin');
    }

    public function blogAdd(Request $request){

        $validate = $request->validate([
              "title"=>'required',
              "slug"=>"required",
              'description'=>'required',
              
          ],
          ['title.required'=>"The Title field is required.",
          'slug.required'=>"The Slug field is required.",
          'description.required'=>"The Description field is required."
          ]
      );
        
        //   date_default_timezone_set('Asia/Dhaka');
        //   $time =  date('d F Y, h:i:s A');

          $blog = new Blog();
          $blog->bloggerId = session()->get('id');
          $blog->title = $request->title;
          $blog->slug = $request->slug;
          $blog->description = $request->description;
        //   $blog->created_at =  $time;
          $result = $blog->save();
          if($result){
            return redirect()->back()->with('success', 'Blog successfully uploaded');
          }
          else{
              return redirect()->back()->with('failed', 'Blog uploading Failed');
          }
        }

        public function bloglist(){
            $bloglist = Blog::where('bloggerId',session()->get('id'))->get();
            return view('Blogger.viewBlogs')->with('bloglist', $bloglist);
        }


}
