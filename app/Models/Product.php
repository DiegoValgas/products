<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'category_id', 'code', 'name', 'price', 'price_promotion', 'tax', 'promotion', 'active'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
