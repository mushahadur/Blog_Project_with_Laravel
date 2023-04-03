<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
    public static $post;
    public static function newPost($request)
    {
        self::$post = new PostModel();
        self::$post->title = $request->title;
        self::$post->body = $request->body;
        self::$post->save();
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }
}
