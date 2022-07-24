<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function viewProduct(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $products = Product::where('name', 'LIKE', "%$search%")->orWhere('tag', 'LIKE', "%$search%")->paginate();
        } else {
            $products = Product::paginate(4);
        }
        $data = compact('products', 'search');
        return view('admin.product.index')->with($data);
    }
    public function showAddProduct()
    {
        return view('admin.product.add');
    }
    public function postProduct(AddProductRequest $request){
        {
            $products = new Product();
            $products->brand_id = $request->brand_id;
            $products->category_id = $request->category_id;
            $products->name = $request->name;
            $products->description = $request->description;
            $products->content = $request->content;
            $products->price = $request->price;
            $products->qty = $request->qty;
            $products->discount = $request->discount;
            $products->weight = $request->weight;
            $products->sku = $request->sku;
            $products->tag = $request->tag;
            // Upload image
            if ($request->has('image')) {
                $get_image = $request->image;
                $path = 'frontend/Images/';
                $name_image = $get_image->getClientOriginalName();
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move($path, $new_image);
            }
            $products->image = $new_image;
            $products->save();
            return redirect()->route('get.view.product');
        }
    }
    public function showEditProduct($id)
    {
        $products = Product::find($id);
        return view('admin.product.edit', compact('products'));
    }
    public function editProduct(Request $request, $id)
    {
        $products = Product::find($id);
        $products->brand_id = $request->brand_id;
        $products->category_id = $request->category_id;
        $products->name = $request->name;
        $products->description = $request->description;
        $products->content = $request->content;
        $products->price = $request->price;
        $products->qty = $request->qty;
        $products->discount = $request->discount;
        $products->weight = $request->weight;
        $products->sku = $request->sku;
        $products->tag = $request->tag;
        // Upload image
        if ($request->has('image')) {
            $destination = 'frontend/Images/' . $products->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $get_image = $request->image;
            $path = 'frontend/Images/';
            $name_image = $get_image->getClientOriginalName();
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $products->image = $new_image;
        }
        $products->update();
        return redirect()->route('get.view.product');
    }
    public function deleteProduct($id)
    {
        $products = Product::find($id);
        $destination = 'frontend/Images/' . $products->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $products->delete();

        return redirect()->route('get.view.product');
    }
}
