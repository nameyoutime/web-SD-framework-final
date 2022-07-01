<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status', 'total', 'user_id', //các thuộc tính
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'delivery_date' => 'datetime',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
        //xác định quan hệ có thể đảo ngược nhau  1 article có thể truy cập đến user,
        //và ngược lại 1 user cũng có thể truy cập lấy thông tin 1 article
    }


    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('quantity','price');

    }
}
