<?php

namespace Modules\Products\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Postimage;
use Illuminate\Routing\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $products = Products::all();

        $search = $request['search'] ?? "";
        if($search != "") {
            $products = Products::where('title', 'LIKE', "%$search%")->orwhere('money', 'LIKE', "%$search%")->orwhere('category_id', 'LIKE', "%$search%")->orwhere('money', 'LIKE', "%$search%")->paginate(5);
        } else{
            $products = Products::paginate(5);
        }

        return view('products::products.view', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $categories = Categories::all();
        return view('products::products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path().'/img', $filename);
            $data['image']= $filename;
        }

        $validated = $request->validate([
            'category_id' => 'required',
            /* 'image' => 'required|unique:products', */
            'title' => 'required|unique:products|max:255',
            'money' => 'required|unique:products',
        ]);

        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        Products::create($data);
        return redirect('/products')->with('thongbao', 'Success create');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('products::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $products = Products::findOrFail($id);

        $categories = Categories::all();
        /* return view('users.products.edit', compact('products')); */
        return view('products::products.edit', compact('categories','products'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $products = Products::findOrFail($id);

        $data = $request->all();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path().'/img', $filename);
            $data['image']= $filename;
        }

        $validated = $request->validate([
            'category_id' => 'required',
            /* 'image' => 'required', */
            'title' => 'required|max:255',
            'money' => 'required',
        ]);


        $products->update($data);
        return redirect('/products')->with('thongbao', 'Success update');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id){
        // Tìm đến đối tượng muốn xóa
        $products = Products::findOrFail($id);

        $products->delete();
        return redirect('/products')->with('thongbao', 'Success delete');
    }
}
