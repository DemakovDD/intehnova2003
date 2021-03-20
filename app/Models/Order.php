<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['maker', 'price_fr', 'price_to', 'detail', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
