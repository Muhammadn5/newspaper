<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Null_;
use Session;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('backend.index');
    }
    public function viewCategory(){
        $data = DB::table('categories')->get();
        return view('backend.category.category', ['data'=>$data]);
    }
    public function editCategory($id){
        $singledata = DB::table('categories')->where('cid', $id)->first();
        if ($singledata ==null){
            return redirect('viewcategory');
        }
        $data = DB::table('categories')->get();
        return view('backend.category.editcategory', ['data'=>$data, 'singledata'=>$singledata]);
    }
    public function multipleDelete(Request $req){
        $data = $req->except('_token');
        if($data['bulk-action']==0){
            session::flash('message', 'Please! select the action you want to perform');
            return redirect()->back();
        }
        $tbl = decrypt($data['tbl']);
        $tblid = decrypt($data['tblid']);
        if (empty($data['select-data'])){
            session::flash('message', 'Please! select the data you want to perform');
            return redirect()->back();
        }
        $ids = $data['select-data'];
        foreach ($ids as $id){
            $dbdata = DB::table($tbl)->where($tblid, $id)->first();
            if(Schema::hasColumn($tbl, 'image')) //check whether table has image column
            {
                if($dbdata->image!=null){
                    File::delete(public_path($tbl. '/' . $dbdata->image));
                }
            }

            DB::table($tbl)->where($tblid, $id)->delete();
        }
        session::flash('message', 'Data is deleted successfully');
        return redirect()->back();
    }
    public function setting(){
        $data = DB::table('settings')->first();
        if ($data){
            $data->social = explode(',', $data->social);
        }
        return view('backend.setting', ['data'=>$data]);
    }
    public function addPost(){
        $categories = DB::table('categories')->get();
        return view('backend.posts.add-post', ['categories'=>$categories]);
    }
    public function allPosts(){
        $posts= DB::table('posts')->orderby('pid', 'desc')->paginate(20);
        foreach ($posts as $post){
            $categories = explode(',', $post->category_id);
            foreach ($categories as $cat){
                $postcat = DB::table('categories')->where('cid', $cat)->value('title');
                $postcategories[] = $postcat;
            }

            $postcat = implode(', ', $postcategories);
            $post->category_id = $postcat;
            $postcategories=[];
        }
        $published = DB::table('posts')->where('status', 'publish')->count();
        $allposts = DB::table('posts')->count();
        return view('backend.posts.all-posts', ['posts'=>$posts, 'published'=>$published, 'allposts'=>$allposts]);
    }
    public function editPost($id){
        $data = DB::table('posts')->where('pid', $id)->first();
        $postcat = explode(',',$data->category_id);
        $categories = DB::table('categories')->get();
        return view('backend.posts.editpost', ['data'=>$data, 'categories'=>$categories, 'postcat'=>$postcat]);
    }

    public function addPage(){
        return view('backend.pages.add-page');
    }
    public function allPages(){
        $posts= DB::table('pages')->orderby('pageid', 'desc')->paginate(20);
        $published = DB::table('pages')->where('status', 'publish')->count();
        $allposts = DB::table('pages')->count();
        return view('backend.pages.all-pages', ['posts'=>$posts, 'published'=>$published, 'allposts'=>$allposts]);
    }
    public function editPage($id){
        $data = DB::table('pages')->where('pageid', $id)->first();
        return view('backend.pages.edit', ['data'=>$data]);
    }
    public function messages(){
        $data = DB::table('messages')->orderby('mid', 'desc')->paginate();
        return view('backend.messages', ['data'=>$data]);
    }
    public function addAdv(){
        return view('backend.advertisements.add-adv');
    }
    public function allAdvs(){
        $data = DB::table('advertisements')->orderby('aid', 'desc')->get();
        return view('backend.advertisements.all-advs', ['data'=>$data]);
    }
    public function editAdv($id){
        $data = DB::table('advertisements')->where('aid', $id)->first();
        return view('backend.advertisements.edit-adv', ['data'=>$data]);
    }
}
