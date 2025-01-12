<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Services\ImageUploadService;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function manage()
    {
        $show_data = Banner::all();
        return view('backend.banner.manage', compact('show_data'));
    }

    public function add()
    {
        return view('backend.banner.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'details' => 'string',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = ImageUploadService::upload($request->file('image'), 'banner-image');
        }

        Banner::create([
            'title' => $request->title,
            'details' => $request->details,
            'image' => $imagePath,
        ]);

        Toastr()->success('Banner created successfully', 'Success', ['options']);
        return redirect()->route('banner.manage');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('backend.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'details' => 'string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:5120',
        ]);


        $banner = Banner::findOrFail($id);
        $banner->title = $request->title;
        $banner->details = $request->details;

        if ($request->hasFile('image')) {
            $imagePath = ImageUploadService::upload($request->file('image'), 'banner-image');
            $banner->image = $imagePath;
        }
        $banner->save();

        toastr()->success('Banner updated successfully', 'Success');
        return redirect()->route('banner.manage');
    }

    public function toggleStatus($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->status = !$banner->status;
        $banner->save();

        toastr()->success('Banner status updated successfully', 'Success');
        return redirect()->route('banner.manage');
    }

    public function delete($id)
    {
        $bannerCount = Banner::count();

        if ($bannerCount <= 1) {
            toastr()->error('Cannot delete the last banner!', 'Error');
            return redirect()->route('banner.manage');
        }

        $banner = Banner::findOrFail($id);
        $banner->delete();

        toastr()->success('Banner deleted successfully', 'Success');
        return redirect()->route('banner.manage');
    }
}
