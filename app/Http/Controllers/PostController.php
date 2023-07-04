<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        if(Auth::user()->role == 'admin'){
            $adminposts = Post::all();

        }else {
            $adminposts = Post::where('author_id', $id)->get();
        }



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
            $tags = $request->input('tags');
            $is_featured = $request->input('is_featured');


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
            $post->is_featured = $is_featured;
            $post->tags = $tags;
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

        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Auth::check()){
            $post = Post::find($id);
            $title = $request->input('title');
            $description = $request->input('description');
            $cat_id = $request->input('cat_id');
            $tags = $request->input('tags');
            $is_featured = $request->input('is_featured');


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
            $post->is_featured = $is_featured;
            $post->tags = $tags;
            $post->author_id = Auth::id();
            $post->update();
        }

        return redirect()->route('post.index');
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $post = Post::find($id);
        $post->delete();


        return redirect()->route('post.create');
    }

    public function singlePost(Request $request, $id){

        $post = Post::find($id);

        $prev = Post::where('id', '<', $post->id)->orderBy('id','desc')->value('id');
        $next = Post::where('id', '>', $post->id)->orderBy('id')->value('id');

        $prevPost = Post::find($prev);
        $nextPost = Post::find($next);

        $latestPosts = Post::latest()->take(4)->get();
        $categories = Category::withCount('posts')->get();

        $comments = $post->comments()->with('user','replies')->get();


        return view('pages.single-post', compact('post', 'prevPost', 'nextPost', 'latestPosts', 'categories', 'comments'));

    }




    public function comment(Request $request, $post_id){
        $name = $request->input('name');
        $email = $request->input('email');
        $content = $request->input('message');

        $comment = new Comment();

        if (Auth::check()){
            $comment->content = $content;
            $comment->post_id = $post_id;
            $comment->user_id = Auth::id();
        }else {
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make("password"),
            ]);
            $comment->content = $content;
            $comment->post_id = $post_id;
            $comment->user_id = $user->id;
        }
        $comment->save();

        return redirect()->route('single.post', ['id'=> $post_id]);


    }
}
