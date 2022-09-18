<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded=['created_at','updated_at'];

    public function findall(){
        $findAll=$this::get();
        return $findAll;
    }

    public function findreviews($id){
        $findreview=$this::find($id);
        return $findreview;
    }

    public function addition($review_title,$song_title,$review){
        $this::create([
            'review_title'=>$review_title,
            'review_song'=>$song_title,
            'review_text'=>$review
        ]);
    }

    public function updates($review_title,$song_title,$review,$id){
        $this::whereId($id)->update([
            'review_title'=>$review_title,
            'review_song'=>$song_title,
            'review_text'=>$review,
        ]);
    }
    public function deletes($id){
        $this::find($id)->delete();
    }
}
