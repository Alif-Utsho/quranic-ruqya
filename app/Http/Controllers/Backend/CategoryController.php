<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function manage()
    {
        $show_data = Category::all();
        return view('backend.category.manage', compact('show_data'));
    }

    public function add()
    {
        return view('backend.category.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:200',
        ]);

        Category::create([
            'title' => $request->title,
        ]);

        Toastr()->success('Category created successfully', 'Success', ['options']);
        return redirect()->route('category.manage');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:200',
        ]);


        $category = Category::findOrFail($id);
        $category->title = $request->title;
        $category->save();

        toastr()->success('Category updated successfully', 'Success');
        return redirect()->route('category.manage');
    }

    public function toggleStatus($id)
    {
        $category = Category::findOrFail($id);
        $category->status = !$category->status;
        $category->save();

        toastr()->success('Category status updated successfully', 'Success');
        return redirect()->route('category.manage');
    }

    public function delete($id)
    {
        $categoryCount = Category::count();

        if ($categoryCount <= 1) {
            toastr()->error('Cannot delete the last category!', 'Error');
            return redirect()->route('category.manage');
        }

        $category = Category::findOrFail($id);
        $category->delete();

        toastr()->success('Category deleted successfully', 'Success');
        return redirect()->route('category.manage');
    }
}
