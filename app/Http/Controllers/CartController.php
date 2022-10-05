<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsGallery;
use App\Models\Customers;
use App\Models\Bookings;
use DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        return view('frontend.cart');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $productsgallery = ProductsGallery::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'productgallery_id' => $productsgallery->productgallery_id,
                'image' => $productsgallery->image,
                'title' => $productsgallery->title,
                'money' => $productsgallery->money,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);
        /* dd($cart); */
        return redirect()->back()->with('status', 'Product added to cart successfully!');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function postCheckOut(Request $request)
    {

        $rqData = $request->all();
        // dd($rqData);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:customers,email',
            'address'=>'required',
            'phone_number'=>'required'
        ]);

        $customer1 = Customers::create([
            'name'=> $rqData['name'],
            'email'=> $rqData['email'],
            'address'=> $rqData['address'],
            'phone_number'=> $rqData['phone_number'],
        ]);


        $arr = [];
        foreach ($rqData['ids'] as $key => $val)
        {
            $arr[]=[
                'id' => $rqData['ids'][$key],
                'name' => $rqData['nameProduct'][$key],
                'quantity' => $rqData['quantity'][$key],
                'price' => $rqData['Subtotal'][$key],
            ];
        }

        $rqData['customer_id'] = $customer1->id ;
        $bookings = Bookings::create(
            ['customer_id' =>  $rqData['customer_id'] ]
        );
        Bookings::addStore12($arr,$bookings->id);
            return back()->with('success', 'You have checkout success');
    }
}
