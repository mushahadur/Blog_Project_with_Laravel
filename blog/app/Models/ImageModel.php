<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    use HasFactory;
    private static $blogImage, $image, $imageUrl, $imageName, $extension, $directory,$message;
    /**
     * @var mixed|string
     */

    public static function getImageUrl($request)
    {
        self::$image     = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'blog-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newImage($request)
    {
        self::$blogImage          = new ImageModel();
        self::$blogImage->name    = $request->name;
        self::$blogImage->image   = self::getImageUrl($request);
        self::$blogImage->save();
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }
}
