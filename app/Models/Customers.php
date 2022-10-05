<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone_number',
        'note',
    ];

    /* protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $guarded = []; */
    public function bookings(){
        return $this->hasMany('App\Models\Bookings', 'customer_id');
    }

    /* public function users()
    {
        return $this->morphedByMany(User::class, 'user_id');
    } */
}
