<?php

namespace Modules\Categories\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Routing\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $categories = Categories::all();

        $search = $request['search'] ?? "";
        if($search != "") {
            $categories = Categories::where('title', 'LIKE', "%$search%")->paginate(5);
        } else{
            $categories = Categories::paginate(5);
        }

        return view('categories::categories.view', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('categories::categories.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validated = $request->validate([
            'title' => 'required|unique:categories|max:255',
        ]);

        
        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        Categories::create($data);
        return redirect('/categories')->with('thongbao', 'Success create');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('categories::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        // Tìm đến đối tượng muốn update
        $categories = Categories::findOrFail($id);
        
        // điều hướng đến view edit user và truyền sang dữ liệu về user muốn sửa đổi
        // $categories = Categories::all();
        /* return view('users.categories.edit', compact('categories')); */
        return view('categories::categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $categories = Categories::findOrFail($id);

        $data = $request->all();

        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);


        $categories->update($data);
        return redirect('/categories')->with('thongbao', 'Success update');
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
        $categories = Categories::findOrFail($id);

        $categories->delete();
        return redirect('/categories')->with('thongbao', 'Success delete');
    }
}
