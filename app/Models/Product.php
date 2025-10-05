<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'price',
        'category',
        'quantity'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
