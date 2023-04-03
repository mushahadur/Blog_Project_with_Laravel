<?php

namespace App\Models;

use App\Models\PostModel;
use App\Models\ImageModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment'];
    public static $comment, $postComment, $imageComment;
    public static function blogComment($request, $id)
    {
        self::$postComment = PostModel::find($id);
        self::$comment = new Comment();
        self::$comment->comment = $request->comment;

        self::$postComment->comments()->save(self::$comment);
    }

    public static function imageComment($request, $id)
    {
        self::$imageComment = ImageModel::find($id);
        self::$comment = new Comment();
        self::$comment->comment = $request->comment;

        self::$imageComment->comments()->save(self::$comment);
    }

    public function commentable()
    {
        return $this->morphTo();
    }
}
