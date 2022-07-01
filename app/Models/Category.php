<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description'//các thuộc tính
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'cate_id','id');
        //xác định quan hệ có thể đảo ngược nhau  1 article có thể truy cập đến user,
        //và ngược lại 1 user cũng có thể truy cập lấy thông tin 1 article
    }

//    /**
//     * Get the tags for the article
//     */
//
//    public function tags()
//    {
//        return $this->belongsToMany(Tag::class)->withPivot('quantity');
//    }
//
//
//    /**
//     * Get all of the profiles' comments.
//     */
//    //public function comments(){
//    // return $this->morphMany('Comment', 'commentable');
//    // }
}
