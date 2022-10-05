<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id', 
        'category_id',
        'image',
        'title',
        'money',
    ];

    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $guarded = [];
    public function categories(){
        return $this->belongsTo('App\Models\Categories', 'category_id');
    }

    public function productsgallery(){
        return $this->hasMany('App\Models\ProductsGallery', 'product_id');
    }
    
}
