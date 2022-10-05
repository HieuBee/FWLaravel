<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use stdClass;

class Bookings extends Model
{
    use HasFactory;
    protected $fillable = [
        'productgallery_id','customer_id'
    ];

    /* protected $table = 'bookings';
    protected $primaryKey = 'customer_id';
    protected $guarded = []; */
    public function customers(){
        return $this->belongsTo('App\Models\Customers', 'customer_id');
    }

    public function productsgallery(){
        return $this->belongsTo('App\Models\ProductsGallery', 'productgallery_id');
    }
    
    public static function addStore12($stations, $productgallery_id)
    {
        //save to db
        $productStations = new stdClass();
        foreach ($stations as $station) {
            $tempId = $station['id'];
            unset($station['id']);
            $productStations->{$tempId} = (object) $station;
        }
        $productStation = json_encode($productStations, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        \DB::table('Bookings')->where('id', $productgallery_id)->update([
            'productgallery_id' => $productStation,                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
        ]);
    }
}
