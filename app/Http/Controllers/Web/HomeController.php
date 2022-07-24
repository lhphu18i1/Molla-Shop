<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Blog;

class HomeController extends Controller
{
    public function viewHome(Request $request)
    {
        $perPage = $request->show ?? 9;
        // $sortBy = $request->sort_by ?? 'latest';

        $search = $request['search'] ?? "";
        if ($search != "") {
            $products = Product::where('name', 'LIKE', "%$search%")->paginate();
        } else {
            $products = Product::paginate($perPage);
        }
        $menProducts = Product::where('category_id', 1)->get();
        $womenProducts = Product::where('category_id', 2)->get();

        // $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();
        return view('web.home', compact('menProducts', 'womenProducts', 'products', 'search'));
    }
    public function viewBlog()
    {
        return view('web.blog');
    }
    public function viewCheckout()
    {
        return view('web.checkout');
    }
    public function viewContact()
    {
        return view('web.contact');
    }
    public function viewShop()
    {
        return view('web.shop');
    }
}
