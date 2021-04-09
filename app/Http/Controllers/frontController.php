<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class frontController extends Controller
{
    //
    public function __construct()
    {
        $categories = DB::table('categories')->where('status', 'on')->get();
        $settings = DB::table('settings')->first();
        if ($settings) {
            $settings->social = explode(',', $settings->social);
            foreach ($settings->social as $social) {
                $icon = explode('.', $social);
                $icon = $icon[1];
                $icons[] = $icon;
            }
        } else {
            $icons = [];
        }
        $lastnews = DB::table('posts')->where('status', 'publish')->orderby('pid', 'desc')->first();
        $pages = DB::table('pages')->where('status','publish')->get();
        $leaderboard = DB::table('advertisements')->where('status', 'Display')->where('location', 'Leaderboard')->orderby('aid', 'desc')->first();
        $sidebarTop = DB::table('advertisements')->where('status', 'Display')->where('location', 'Sidebar-top')->orderby('aid', 'desc')->first();
        $sidebarBottom = DB::table('advertisements')->where('status', 'Display')->where('location', 'Sidebar-bottom')->orderby('aid', 'desc')->first();
        view()->share([
            'categories' => $categories,
            'settings' => $settings,
            'icons' => $icons,
            'lastnews'=>$lastnews,
            'pages'=>$pages,
            'leaderboard'=>$leaderboard,
            'sidebarTop'=>$sidebarTop,
            'sidebarBottom'=>$sidebarBottom,
        ]);
    }

    public function index()
    {
        $featured = DB::table('posts')->where('category_id', 'LIKE', '%3%')->orderby('pid', 'desc')->get();
        $news = DB::table('posts')->where('category_id', 'LIKE', '%7%')->orderby('pid', 'desc')->get();
        $sports = DB::table('posts')->where('category_id', 'LIKE', '%5%')->orderby('pid', 'desc')->get();
        $business = DB::table('posts')->where('category_id', 'LIKE', '%2%')->orderby('pid', 'desc')->get();
        $health = DB::table('posts')->where('category_id', 'LIKE', '%8%')->orderby('pid', 'desc')->get();
        $politics = DB::table('posts')->where('category_id', 'LIKE', '%1%')->orderby('pid', 'desc')->get();
        $style = DB::table('posts')->where('category_id', 'LIKE', '%6%')->orderby('pid', 'desc')->get();
        $technology = DB::table('posts')->where('category_id', 'LIKE', '%4%')->orderby('pid', 'desc')->get();
        $entertainment = DB::table('posts')->where('category_id', 'LIKE', '%9%')->orderby('pid', 'desc')->get();
        $travel = DB::table('posts')->where('category_id', 'LIKE', '%10%')->orderby('pid', 'desc')->get();
        return view('frontend.index', ['featured' => $featured, 'news' => $news, 'sports' => $sports, 'business' => $business, 'health' => $health, 'politics' => $politics, 'style' => $style, 'technology' => $technology, 'entertainment' => $entertainment, 'travel' => $travel]);
    }

    public function category($slug)
    {
        $cat = DB::table('categories')->where('slug', $slug)->first();
        $posts = DB::table('posts')->where('category_id', 'LIKE', '%' . $cat->cid . '%')->get();
        $latest = DB::table('posts')->where('status', 'publish')->orderby('pid', 'desc')->get();
        return view('frontend.category', ['posts' => $posts, 'cat' => $cat, 'latest'=>$latest]);
    }

    public function article($slug)
    {
        $data = DB::table('posts')->where('slug', $slug)->first();
        $views = $data->views;
        DB::table('posts')->where('slug', $slug)->update(['views'=>$views + 1]);
        $category = explode(',', $data->category_id);
        $category = $category[0];
        $related = DB::table('posts')->where('category_id', 'LIKE', '%' . $category . '%')->get();
        $latest = DB::table('posts')->where('status', 'publish')->orderby('pid', 'desc')->get();
        return view('frontend.article', ['data' => $data, 'related' => $related, 'latest' => $latest]);
    }
    public function page($slug){
        $data = DB::table('pages')->where('slug', $slug)->first();
        $latest = DB::table('posts')->where('status', 'publish')->orderby('pid', 'desc')->get();
        return view('frontend.page', ['data'=>$data, 'latest'=>$latest]);
    }
    public function contactUs(){
        $latest = DB::table('posts')->where('status', 'publish')->orderby('pid', 'desc')->get();
        return view('frontend.contact', ['latest'=>$latest]);
    }
    public function searchContent(){
        $url = 'http://localhost/mammaskitchen.com';
        $text = $_GET['text'];
        $data = DB::table('posts')->where('title', 'LIKE', '%'.$text.'%')->orwhere('description', 'LIKE', '%'.$text.'%')->get();
        $output = '';
        echo '<ul class="search-result">';
        if (count($data)>0){
            foreach ($data as $d){
                echo '<li><a href="'.$url.'/'.$d->slug.'">'.$d->title.'</a></li>';
            }
        }
            else {
                echo '<li><a href="#">sorry! No data found</a></li>';
            }

        echo '</ul>';
        return $output;
    }
}
