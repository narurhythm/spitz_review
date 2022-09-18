<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded=['created_at','updated_at'];

    public function user()
    {
        return $this->belongsTo('app\Models\User');
    }
    
    public function comment_up($review_id,$user_id,$comment)
    {
        $this::create([
            'user_id'=>$user_id,
            'review_id'=>$review_id,
            'com_text'=>$comment,
        ]);
    }

    public function findcomment($id)
    {
        $findcomment=$this::with('user')->whereReview_id($id)->get();
        return $findcomment;
    }
}
