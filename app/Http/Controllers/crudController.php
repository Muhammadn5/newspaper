<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class crudController extends Controller
{
    //
    public function insertData(Request $req){
        $data = $req->except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['created_at'] = date('Y-m-d H:i:s');

//        if ($req->hasFile('images')){
//            $data['images'] = $this->uploadimage($tbl, $data['images']);
//        }
        if ($req->hasFile('image')){
            $data['image'] = $this->uploadimage($tbl, $data['image']);
        }
//        this if condition is for settings url or social to convert array into string
        if ($req->has('social')){
            $data['social'] = implode(',', $data['social']);
        }
        if ($req->has('category_id')){
            $data['category_id'] = implode(',', $data['category_id']);
        }

        DB::table($tbl)->insert($data);
        if ($tbl =='messages'){
            Session::flash('message', 'Thank you for messaging us. We will get back to you shortly! Please keep patience.');
        } else {
            Session::flash('message', 'Submitted Successfully!');
        }
        return redirect()->back();
    }

    public function updateData(Request $req){
        $data = $req->except('_token');
        $tbl = decrypt($data['tbl']);
        unset($data['tbl']);
        $data['updated_at'] = date('Y-m-d H:i:s');

        if($req->hasFile('image')){
            $data['image'] = $this->uploadimage($tbl, $data['image']);
        }
//        this if condition is for settings url or social to convert array into string
        if ($req->has('social')){
            $data['social'] = implode(',', $data['social']);
        }
        if ($req->has('category_id')){
            $data['category_id']=implode(',', $data['category_id']);
        }
        DB::table($tbl)->where(key($data), reset($data))->update($data);
        Session::flash('message', 'Data update Successfully!');
        return redirect()->back();
    }
    public function uploadimage($location, $imagename){
        $name = $imagename->getClientOriginalName();
        $imagename->move(public_path().'/'.$location, date('ymdgis').$name);
        return date('ymdgis').$name;


    }
}
