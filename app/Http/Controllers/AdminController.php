<?php

namespace App\Http\Controllers;

use App\Category;
use App\Items;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class AdminController extends Controller
{
    public function index(){

        return view('admin/index');
    }
    public function category(){
       $category = Category::all();

        return view('admin/newcategory',['categorys'=>$category]);
    }
    public function addcategory(Request $request){

        $category = $request->get('category');
        $Cate = new Category();
        $Cate->name = $category;
        $Cate->save();


        return back();
    }
    public function items(){
        $category = Category::all();
        $items = Items::all();
        return view('admin/items',['categorys'=>$category, 'items'=>$items]);

    }
    public function additems(Request $request){
        $name = $request->post('name');
        $price = $request->post('price');
        $firma = $request->post('firma');
        $category_id = $request->post('category_id');
        $description = $request->post('description');

        $items_img = $request->file('img')->store('public/images/items');
        $items_img = $request->file('img')->hashName();

        $Items = new Items();
        $Items->name = $name;
        $Items->description = $description;
        $Items->price = $price;
        $Items->makeBy = $firma;
        $Items->category_id = $category_id;
        $Items->image = $items_img;
        $Items->save();


        return back();
    }
    public function delitems($id){
        $del_product = Items::find($id)->delete();
        return back();
    }
}
