<?php

namespace App\Models\Model;
use App\Models\Model\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=[
        'star','customer','review'

    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
