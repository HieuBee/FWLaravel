<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id', 
        'title'
    ];

    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    protected $guarded = [];
    public function products(){
        return $this->hasMany('App\Models\Products', 'category_id');
    }
}
