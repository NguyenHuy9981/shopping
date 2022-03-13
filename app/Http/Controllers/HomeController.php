<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Slider;
use App\Product;
use App\Setting;
use App\Tag;
use Dotenv\Result\Success;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $catChildId = [];

    function index() {
        $sliders = Slider::all();
        $products = Product::oldest()->paginate(6);
        $menus = Menu::where('parent_id', 0)->get();
        $categories = Category::where('parent_id', 0)->get();
        $tags =Tag::all();
        return view('home', compact('sliders','products','menus', 'categories', 'tags'));
    }

    function setupCat($id) {
        
        return $this->catChildId;
        }

    function list($id) {

        $catChildId = [];
        $categoryChilds = Category::where('parent_id', $id)->get();
        
        foreach($categoryChilds as $categoryChild) {
            $catChildId[] = $categoryChild->id;
            
        }
        array_push($catChildId, $id);

        if(!empty($catChildId)) {
            $products = Product::whereIn('category_id', $catChildId)->paginate(12);
        }else{
            $products = Product::where('category_id', $id)->paginate(12);
        }


        $categoryOfPage = Category::find($id);
        $sliders = Slider::all();
        $menus = Menu::where('parent_id', 0)->get();
        $categories = Category::where('parent_id', 0)->get();
        return view('list', compact('sliders','products','menus', 'categories', 'categoryOfPage'));
    }


    function detail($id) {
        $sliders = Slider::all();
        $product = Product::find($id);
        $menus = Menu::where('parent_id', 0)->get();
        $categories = Category::where('parent_id', 0)->get();
        return view('productDetail', compact('sliders','product','menus', 'categories'));
    }


    function search(Request $request) {
        $searchValue = $request['search'];
        $products = Product::where('name', 'LIKE', '%'.$searchValue.'%')->paginate();
        
        

        $sliders = Slider::all();
        $menus = Menu::where('parent_id', 0)->get();
        $categories = Category::where('parent_id', 0)->get();
        return view('search', compact('sliders','products','menus', 'categories'));
    }


    
}
