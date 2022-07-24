<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function viewShop(Request $request){
        //Get categories:
        $categories = Category::all();

        //Get products:
        $perPage = $request->show ?? 9;
        // $sortBy = $request->sort_by ?? 'latest';
        $search = $request['search'] ?? "";
        if ($search != "") {
            $products = Product::where('name', 'LIKE', "%$search%")->paginate();
        } else {
            $products = Product::paginate($perPage);
        }
        // switch ($sortBy) {
        //     case 'latest':
        //         $products = $products->orderBy('id');
        //         break;
        //     case 'oldest':
        //         $products = $products->orderByDesc('id');
        //         break;
        //     case 'name-ascending':
        //         $products = $products->orderBy('name');
        //         break;
        //     case 'name-descending':
        //         $products = $products->orderByDesc('name');
        //         break;
        //     case 'price-ascending':
        //         $products = $products->orderBy('price');
        //         break;
        //     case 'price-descending':
        //         $products = $products->orderByDesc('price');
        //         break;
        //     default:
        //         $products = $products->orderBy('id');
        // }
        return view('web.shop', compact('products','search','categories'));
    }
    public function viewCategory($categoryName, Request $request){
        //Get categories:
        $categories = Category::all();
        $search = $request['search'] ?? "";
        if ($search != "") {
            $products = Product::where('name', 'LIKE', "%$search%")->paginate();
        } else {
            $products = Product::paginate(9);
        }

        //Get products:
        $products = Category::where('name', $categoryName)->first()->products->toQuery()->paginate();

        return view('web.shop', compact('products','search','categories'));
    }
}
