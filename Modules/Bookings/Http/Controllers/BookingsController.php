<?php

namespace Modules\Bookings\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Models\ProductsGallery;
use App\Models\Categories;
use App\Models\Bookings;
use Illuminate\Routing\Controller;

class BookingsController extends Controller
{
    public function index() 
    {
        $bookings = Bookings::all();                                                            
        return view('bookings::bookings.view',compact('bookings'));
    }
}
