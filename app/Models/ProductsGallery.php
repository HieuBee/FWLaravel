<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsGallery extends Model
{
    /* public $table = "productsgallery"; */

    use HasFactory;
    protected $fillable = [
        'productgallery_id', 
        'product_id',
        'image',
        'title',
        'description',
        'money',
        'status'
    ];

    protected $table = 'productsgallery';
    protected $primaryKey = 'productgallery_id';
    protected $guarded = [];
    public function products(){
        return $this->belongsTo('App\Models\Products', 'product_id');
    }

    public function bookings(){
        return $this->hasMany('App\Models\Bookings', 'productgallery_id');
    }
}
