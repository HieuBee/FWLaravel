<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /* protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $guarded = [];
    public function customers(){
        return $this->hasMany('App\Models\Customers', 'user_id');
    } */

    /* public function customers()
    {
        return $this->morphToMany(Customers::class, 'user_id');
    } */

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

/* class User extends Model
{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
} */