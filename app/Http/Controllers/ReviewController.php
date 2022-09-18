<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Review;
use App\Models\Comment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\tourokurequest;

class ReviewController extends Controller
{
    private $user;
    private $review;
    private $comment;
    
    public function __construct()
    {
        $this->user=new User;
        $this->review=new Review;
        $this->comment=new Comment;
    }

    public function findall(){
        $findAll=$this->review->findAll();
        return view('review_top',compact('findAll'));
    }

    public function findreviews(Request $request){
        if(!isset($request->id)){
            return redirect()->route('reviewpage');
        }
        $id=$request->id;
        $reviews=$this->review->findreviews($id);
        $comments=$this->comment->findcomment($id);
        $user=Auth::user();
        return view('reviews',compact('reviews','user','id','comments'));
    }
    
    public function addition(Request $request){
        $review_title=$request->review_title;
        $review=$request->review;
        $song_title=$request->song_title;
        $this->review->addition($review_title,$song_title,$review);
        return redirect()->route('reviewpage');
    }

    public function review_updates(Request $request){
        if(!Auth::check()){
            return redirect()->route('reviewpage');
        }
        $id=$request->id;
        $reviews=$this->review->findreviews($id);
        return view('review_update',compact('reviews'));
    }

    public function comment_up(Request $request)
    {
        $review_id=$request->review_id;
        $user_id=$request->user_id;
        $comment=$request->comment;
        $this->comment->comment_up($review_id,$user_id,$comment);
        return redirect()->route('reviewpage');
    }

    public function update(Request $request){
        $review_title=$request->review_title;
        $song_title=$request->song_title;
        $review=$request->review;
        $id=$request->id;
        $this->review->updates($review_title,$song_title,$review,$id);
        return redirect()->route('reviewpage');
    }

    public function delete(Request $request){
        if(!Auth::check()){
            return redirect()->route('reviewpage');
        }
        $id=$request->id;
        $this->review->deletes($id);
        return redirect()->route('reviewpage');
    }

    public function mypage(){
        $user=Auth::user();
        if(!Auth::check()){
            return view('index');
        }
        return view('mypage',compact('user'));
    }
    
    public function mypage_user()
    {
        $user=Auth::user();
        if(!Auth::check()){
            return view('index');
        }
        return view('mypage_update',compact('user'));
    }

    public function mypage_update(Request $request){
        $id=$request->id;
        $user_name=$request->user_name;
        $email=$request->email;
        $password=Hash::make($request->password);
        $this->user->user_update($id,$user_name,$email,$password);
        return view('mypage');
    }

    public function touroku(tourokurequest $request){
        $email=$request->email;
        $password=$request->password;
        $password_hash=Hash::make($password);
        $this->user->touroku($email,$password_hash);
        return view('index');
    }

    public function logout(){
        Auth::logout();
        return view('index');
    }
}
