<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        //
        $id = Auth::id();

        $adminposts = Post::where('author_id', $id)->get();

        return view('admin.posts.index', compact('adminposts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if (Auth::check()){
            $post = new Post();
            $title = $request->input('title');
            $description = $request->input('description');
            $cat_id = $request->input('cat_id');

            $imageName = '';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('uploads/posts'), $imageName);
            }

            $post->title = $title;
            $post->description = $description;
            $post->image = !empty($imageName) ? "uploads/posts/".$imageName : 'admin/img/default-image.png';
            $post->cat_id = $cat_id;
            $post->author_id = Auth::id();
            $post->save();
        }

        return redirect()->route('post.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
