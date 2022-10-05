<?php

namespace Modules\Blogs\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Blogs;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $blogs = Blogs::all();

        $search = $request['search'] ?? "";
        if($search != "") {
            $blogs = Blogs::where('title', 'LIKE', "%$search%")->paginate(5);
        } else{
            $blogs = Blogs::paginate(5);
        }

        return view('blogs::blogs.view', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $blogs = Blogs::all();
        return view('blogs::blogs.create', compact('blogs'));
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
            'writer' => 'required|unique:blogs',
            'title' => 'required|unique:blogs|max:255',
            /* 'description' => 'required|unique:blogs', */
        ]);

        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        Blogs::create($data);
        return redirect('/blogs')->with('thongbao', 'Success create');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('blogs::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $blogs = Blogs::findOrFail($id);

        /* return view('users.blogs.edit', compact('blogs')); */
        return view('blogs::blogs.edit', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $blogs = Blogs::findOrFail($id);

        $data = $request->all();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path().'/img', $filename);
            $data['image']= $filename;
        }

        $validated = $request->validate([
            'writer' => 'required|unique:blogs',
            'title' => 'required|unique:blogs|max:255',
            /* 'description' => 'required|unique:blogs', */
        ]);


        $blogs->update($data);
        return redirect('/blogs')->with('thongbao', 'Success update');
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
        $blogs = Blogs::findOrFail($id);

        $blogs->delete();
        return redirect('/blogs')->with('thongbao', 'Success delete');
    }
}
