<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfo;
use App\Models\Post;
use App\Models\Papers;
use App\Models\Question;
use App\Models\Needpost;
use App\Models\Collaboration;
use App\Models\Jobpost;
use Session;
use Hash;
use Illuminate\Support\Facades\Auth;


class signController extends Controller
{
    public function create(){
        return view('signup');
    }

    public function insert(Request $req){

        $req->validate([
            'username' => 'required',
            'email' => 'required',
            'pass' => 'required|min:3',
            'cpass' => 'required|same:pass',
 
         ]);

             $userinfo = new Userinfo();
             $userinfo->username = $req['username'];
             $userinfo->email = $req['email'];
             $userinfo->pass = Hash::make($req['pass']);
             $userinfo->save();

             if($req){
                return redirect('/login');
            }
            else{
                return back()->with('failed','Something Wrong');
            }
    }

    public function login(){
        return view('/login');
    }

    public function postlogin(Request $req){
        $req->validate([
           'email' => 'required',
           'pass' => 'required',
        ]);

        $user = Userinfo::where('email', '=' , $req -> email)->first();
        if($user){
              if(Hash::check($req->pass, $user->pass)){
                 $req->Session()->put('loginId',$user->id);
                 return redirect('/dashboard');
              } 
              else{
                return back()->with('failed','Password is Wrong');
              } 
        }
        else{
            return back()->with('failed','Email is not correct');
        }
    }

    public function dashboard(){
        // $data = array();
        // if(Session::has('loginId')){
        //     $data = Userinfo::where('id', '=' , Session::get('loginId'))->first();
        // }
        // return view('/dashboard',compact('data'));

        $data = null;
        $post = Post::all();
        $papers = Papers::all();
        $needpost = Needpost::all();
        $question = Question::all();
        $collaboration = Collaboration::all();
        $jobpost = Jobpost::all();

        // Fetch user-specific data if logged in
        if (Session::has('loginId')) {
            $data = Userinfo::where('id', Session::get('loginId'))->first();
            // Optionally filter or modify the data based on user
            $post = Post::where('id', Session::get('loginId'))->get();
            $papers = Papers::where('id', Session::get('loginId'))->get();
            $needpost = Needpost::where('id', Session::get('loginId'))->get();
            $question = Question::where('id', Session::get('loginId'))->get();
            $collaboration = Collaboration::where('id', Session::get('loginId'))->get();
            $jobpost = Jobpost::where('id', Session::get('loginId'))->get();
            // Add other user-specific queries as needed
        }

        // Pass all data to the view
        return view('dashboard', compact(
            'data', 
            'post', 
            'papers', 
            'needpost', 
            'question', 
            'collaboration', 
            'jobpost'
        ));


    }

    public function signout(){
        if(Session::has('loginId')){
            Session::pull('loginId');

            return redirect('/');
        }
    }

    public function edit(){
        $user = Userinfo::where('id', '=' , Session::get('loginId'))->first();
        return view('/edit',compact('user'));
    }

    public function editprofile(Request $request){
        $request->validate([
             'image'=>'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $useredit = Userinfo::where('id', '=' , Session::get('loginId'))->first();
        $useredit->firstname = $request['firstname'];
        $useredit->lastname = $request['lastname'];
        $useredit->phone = $request['phone'];
        $useredit->addiname = $request['addiname'];
        $useredit->organization = $request['organization'];
        $useredit->role = $request['role'];
        $useredit->dob = $request['dob'];
        $useredit->facebook_add = $request['facebook'];
        $useredit->linkedin_add = $request['linked'];
        $useredit->twitter_add = $request['twitter'];
        $useredit->git_add = $request['git'];
        

        // $image = $request->image;
        // $picture = $image->getClientOriginalName();
        // $image->storeAs('public/img',$picture);
        // $useredit->picture = $image;

        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'),$image);
        $path = "/img/".$image;
        $useredit->image = $path;
        $useredit->save();
        return back()->with('message', 'Information Is Successfully Update');

    }


    public function post(Request $request1){
        $request1->validate([
            'file' => 'required|file|max:20480', // Maximum file size of 20MB (20480 KB)
        ]);

        $post = new Post;
        $post->title = $request1['postTitle'];
        $post->description = $request1['postDescription'];

        // $file = time().'.'.$request1->file->getClientOriginalName();
        // $request1->file->move(public_path('file'),$file);
        // $path = "/file/".$file;
        // $post->file = $path;


        $file = $request1->file('file');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $fileName);
        $post->file = '/uploads/' . $fileName;
        $post->save();
        return back()->with('message','Information Uploaded Successfully');
    }


    public function papers(Request $request2){
        $request2->validate([
            'file' => 'required|file|max:20480', // Maximum file size of 20MB (20480 KB)
        ]);

        $papers = new Papers;
        $papers->title = $request2['paperTitle'];
        $papers->description = $request2['paperDescription'];

        // $file = time().'.'.$request1->file->getClientOriginalName();
        // $request1->file->move(public_path('file'),$file);
        // $path = "/file/".$file;
        // $post->file = $path;


        $file = $request2->file('file');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('papers'), $fileName);
        $papers->file = '/papers/' . $fileName;
        $papers->save();
        return back()->with('message','Information Uploaded Successfully');
    }

    public function needpost(Request $request3){
        $request3->validate([
            'file' => 'required|file|max:20480', // Maximum file size of 20MB (20480 KB)
        ]);

        $needpost = new Needpost;
        $needpost->title = $request3['needPostTitle'];
        $needpost->description = $request3['needPostDescription'];

        // $file = time().'.'.$request1->file->getClientOriginalName();
        // $request1->file->move(public_path('file'),$file);
        // $path = "/file/".$file;
        // $post->file = $path;


        $file = $request3->file('file');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('needpost'), $fileName);
        $needpost->file = '/needpost/' . $fileName;
        $needpost->save();
        return back()->with('message','Information Uploaded Successfully');
    }

    
    public function question(Request $request4){
        $request4->validate([
            'file' => 'required|file|max:20480', // Maximum file size of 20MB (20480 KB)
        ]);

        $question = new Question;
        $question->title = $request4['questionTitle'];
        $question->description = $request4['questionDescription'];

        // $file = time().'.'.$request1->file->getClientOriginalName();
        // $request1->file->move(public_path('file'),$file);
        // $path = "/file/".$file;
        // $post->file = $path;


        $file = $request4->file('file');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('question'), $fileName);
        $question->file = '/question/' . $fileName;
        $question->save();
        return back()->with('message','Information Uploaded Successfully');
    }


    public function collaboration(Request $request5){
        $request5->validate([
            'file' => 'required|file|max:20480', // Maximum file size of 20MB (20480 KB)
        ]);

        $collaboration = new collaboration;
        $collaboration->title = $request5['collabTitle'];
        $collaboration->description = $request5['collabDescription'];

        // $file = time().'.'.$request1->file->getClientOriginalName();
        // $request1->file->move(public_path('file'),$file);
        // $path = "/file/".$file;
        // $post->file = $path;


        $file = $request5->file('file');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('collaboration'), $fileName);
        $collaboration->file = '/collaboration/' . $fileName;
        $collaboration->save();
        return back()->with('message','Information Uploaded Successfully');
    }


    public function jobpost(Request $request6){
        $request6->validate([
            'file' => 'required|file|max:20480', // Maximum file size of 20MB (20480 KB)
        ]);

        $jobpost = new Jobpost;
        $jobpost->title = $request6['jobPostTitle'];
        $jobpost->company_name = $request6['companyName'];
        $jobpost->description = $request6['jobPostDescription'];

        // $file = time().'.'.$request1->file->getClientOriginalName();
        // $request1->file->move(public_path('file'),$file);
        // $path = "/file/".$file;
        // $post->file = $path;


        $file = $request6->file('file');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('jobpost'), $fileName);
        $jobpost->file = '/jobpost/' . $fileName;
        $jobpost->save();
        return back()->with('message','Information Uploaded Successfully');
    }



    // public function viewpost()
    // {
    //     $vpost = Post::all();
    //     return view('dashboard')->with('vpost', $vpost);
    // }





}
