<?php

namespace App\Http\Controllers;

use App\Category;
use App\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index(){
        $homecategory = Category::all();
        $items = Items::orderBy('id','DESC')->limit('7')->get();
        $itemsfiltr = Items::orderBy('id','DESC')->limit('8')->get();
        $relitems = Items::orderBy('id','DESC')->limit('3')->get();

        return view('index',['relitemss'=>$relitems,'homecategorys'=>$homecategory, 'items'=>$items, 'itemsfiltrs'=>$itemsfiltr]);

    }
    public function singleitems($id){
        $single_items = Items::where('items.id',$id)
            ->join('categories', 'categories.id', '=', 'items.category_id')->
            select('categories.id as cid','categories.name as cname','items.id as id','items.created_at as created_at','items.image as image','items.category_id as category_id','items.makeBy as makeBy','items.price as price','items.description as description','items.name as name')
            ->first();

//        $single_items = Items::where('id',$id)->first();
//        $category = Category::where(ca)
        return view('singleitems',['single_items'=>$single_items]);

    }
    public function singlecategory($id){
        $category = Category::all();

        $user_post = DB::table('items')->where('category_id', $id)
            ->paginate(10);
        return view('category',['user_posts'=>$user_post,'filtre'=>$category]);

    }
}
