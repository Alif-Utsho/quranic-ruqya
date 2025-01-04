<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Audio;
use App\Models\Banner;
use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banners = Banner::whereStatus(true)->get();
        $latest_post = Blog::whereStatus(true)->latest()->limit(4)->get();
        $popular_post = Blog::whereStatus(true)->where('isPopular', true)->latest()->limit(4)->get();

        return view('frontend.index', compact('banners', 'latest_post', 'popular_post'));
    }

    public function blogs(Request $request)
    {
        $blogs = Blog::whereStatus(true)->latest();

        if ($request->category) {
            $blogs->where('category_id', $request->category);
        }

        if ($request->sub_category) {
            $blogs->where('sub_category_id', $request->sub_category);
        }

        $blogs = $blogs->get();

        return view('frontend.pages.blogs', compact('blogs'));
    }

    public function blogDetails($id)
    {
        $blog = Blog::find($id);
        $latest_post = Blog::whereStatus(true)->latest()->where('id', '<>', $blog->id)->limit(4)->get();

        return view('frontend.pages.blog-details', compact('blog', 'latest_post'));
    }

    public function audios()
    {
        $audios = Audio::whereStatus(true)->where('isAyat', false)->latest()->get();
        return view('frontend.pages.audios', compact('audios'));
    }

    public function ayats()
    {
        $audios = Audio::whereStatus(true)->where('isAyat', true)->latest()->get();
        return view('frontend.pages.audios', compact('audios'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
