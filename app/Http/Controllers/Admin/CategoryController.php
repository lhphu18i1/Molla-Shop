<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;


class CategoryController extends Controller
{
    public function viewCategory(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $categories = Category::where('cat_name', 'LIKE', "%$search%")->orWhere('brand', 'LIKE', "%$search%")->paginate();
        } else {
            $categories = Category::paginate(4);
        }
        $data = compact('categories', 'search');
        return view('admin.category.index')->with($data);
    }
    public function showAddCategory()
    {
        return view('admin.category.add');
    }
    public function postCategory(Request $request){
        {
            $categories = new Category();
            $categories->name = $request->name;
            $categories->save();

            return redirect()->route('get.view.category');
        }
    }
    public function showEditCategory($id)
    {
        $categories = Category::find($id);
        return view('admin.category.edit', compact('cat'));
    }
    public function editCategory(Request $request, $id)
    {
        $categories = Category::find($id);
        $categories->name = $request->name;
        $categories->update();

        return redirect()->route('get.view.category');
    }
    public function deleteCategory($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return redirect()->route('get.view.category');
    }
}
