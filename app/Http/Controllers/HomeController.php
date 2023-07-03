<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::paginate(6);

        $sliderPosts = Post::where('is_featured', 1)->take(3)->get();
        $sliderPostIds = $sliderPosts->pluck('id');
        $thumbPosts = Post::whereNotIn('id', $sliderPostIds)->where('is_featured',1)->take(5)->get();
        $social = Settings::first();


        return view('pages.home', compact('posts', 'sliderPosts', 'thumbPosts', 'social'));
    }

    public function adminDashboard(){
        return view('admin.index');
    }

    public function settingsCreate(){
        return view('admin.settings.create');
    }
    public function settingsStore(Request $request){

        $author_id =  Auth::id();

        $facebook = $request->input('facebook');
        $twitter = $request->input('twitter');
        $instagram = $request->input('instagram');
        $linkedin = $request->input('linkedin');
        $behance = $request->input('behance');

        $mode = $request->input('mode');

        $settings = Settings::updateOrCreate(
            [
                'author_id' => $author_id,
                'fb_url' => $facebook,
                'tw_url' => $twitter,
                'li_url' => $linkedin,
                'in_url' => $instagram,
                'be_url' => $behance,
                'mode' => $mode ?? "dark"
            ]
        );



        return redirect()->route('settings.create');

    }

    public function contact(){
        return view('pages.contact');
    }

    public function aboutUs(){
        return view('pages.about-us');
    }

    public function blog(Request $request){

        $posts = Post::paginate(9);

        $latestPosts = Post::latest()->take(4)->get();
        $categories = Category::withCount('posts')->get();

        return view('pages.blog', compact('posts', 'latestPosts', 'categories'));

    }

}
