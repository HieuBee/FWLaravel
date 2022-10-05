<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Blogs;   
use App\Models\ProductsGallery;


class FrontEndController extends Controller
{
    public function index(Request $request)
    {
        $productsgallery = ProductsGallery::all();

        $search = $request['search'] ?? "";
        if($search != "") {
            $productsgallery = ProductsGallery::where('title', 'LIKE', "%$search%")->orwhere('description', 'LIKE', "%$search%")->orwhere('money', 'LIKE', "%$search%")->orwhere('product_id', 'LIKE', "%$search%")->paginate(5);
        } else{
            $productsgallery = ProductsGallery::paginate(6);
        }

        $productsgallery1 = ProductsGallery::all();
        $productsgallery1 = ProductsGallery::paginate(3);

        return view('frontend.index', compact('productsgallery', 'productsgallery1'));
    }

    public function blog()
    {
        $blogs = Blogs::all();
        return view('frontend.blog', compact('blogs'));
    }

    public function blog_single($id)
    {
        $blogs[] = Blogs::findOrFail($id);
        $blogs = Blogs::paginate(3);
        return view('frontend.blog-single', compact('blogs'));
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function contact_us()
    {
        return view('frontend.contact-us');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function shop()
    {
        $productsgallery = ProductsGallery::all();
        $productsgallery = ProductsGallery::paginate(9);

        return view('frontend.shop', compact('productsgallery'));
    }

    
    public function bonkhongbon()
    {
        return view('frontend.404');
    }
    
    // Products Details

    public function details($id)
    {
        $productsgallery = ProductsGallery::findOrFail($id);
        return view('frontend.product-details', compact('productsgallery'));
    }
}
