<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductsGallery;

class ProductsGalleryDetailsController extends Controller
{
    public function index($id)
    {
        $productsgallery[] = ProductsGallery::findOrFail($id);

        $productsgallery1 = ProductsGallery::all();
        $productsgallery1 = ProductsGallery::paginate(3);
        
        return view('frontend.product-details', compact('productsgallery1', 'productsgallery'));
    }
}
