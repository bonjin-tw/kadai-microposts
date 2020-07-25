<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content'];
    
    /**
     *  この投稿を主有するユーザ。(Userモデルとの関係を定義)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * この投稿をお気に入りしているユーザ。(Userモデルとの関係を定義）
     */
    public function favorite_user()
    {
        return $this->belongsToMany(User::class,'favorites','micropost_id','user_id')->withTimestamps();
    }
}
