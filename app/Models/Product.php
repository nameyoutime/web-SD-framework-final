<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name','description','quantity','price','status', 'cate_id','image' //các thuộc tính
    ];
    /**
     * Get the tags for the article
     */

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity','price');
    }

    public function category(){
        return $this->belongsTo(Category::class,'cate_id','id');

    }

}
