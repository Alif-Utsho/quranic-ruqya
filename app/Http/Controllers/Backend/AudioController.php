<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Audio;
use App\Services\ImageUploadService;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    public function manage()
    {
        $show_data = Audio::all();
        return view('backend.audio.manage', compact('show_data'));
    }

    public function add()
    {
        return view('backend.audio.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'duration' => 'required|string|max:255',
            'details' => 'string',
            'file' => 'required|max:10240',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        if ($request->hasFile('file')) {
            $audioPath = ImageUploadService::upload($request->file('file'), 'audio');
        }

        if ($request->hasFile('image')) {
            $imagePath = ImageUploadService::upload($request->file('image'), 'audio-image');
        }

        Audio::create([
            'title' => $request->title,
            'duration' => $request->duration,
            'details' => $request->details,
            'file' => $audioPath,
            'image' => $imagePath,
            'isAyat' => $request->isAyat ? true : false,
            'isPaid' => $request->isPaid ? true : false,
        ]);

        Toastr()->success('Audio created successfully', 'Success', ['options']);
        return redirect()->route('audio.manage');
    }

    public function edit($id)
    {
        $audio = Audio::findOrFail($id);
        return view('backend.audio.edit', compact('audio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'duration' => 'required|string|max:255',
            'details' => 'string',
            'file' => 'nullable|mimes:mp3,wav,aac,weba|max:10240',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        
        $audio = Audio::findOrFail($id);
        $audio->title = $request->title;
        $audio->duration = $request->duration;
        $audio->details = $request->details;
        $audio->isAyat = $request->isAyat ? true : false;
        $audio->isPaid = $request->isPaid ? true : false;
        
        if ($request->hasFile('file')) {
            $audioPath = ImageUploadService::upload($request->file('file'), 'audio');
            $audio->file = $audioPath ;
        }
        
        if ($request->hasFile('image')) {
            $imagePath = ImageUploadService::upload($request->file('image'), 'audio-image');
            $audio->image = $imagePath;
        }
        $audio->save();

        toastr()->success('Audio updated successfully', 'Success');
        return redirect()->route('audio.manage');
    }

    public function toggleStatus($id)
    {
        $audio = Audio::findOrFail($id);
        $audio->status = !$audio->status;
        $audio->save();

        toastr()->success('Audio status updated successfully', 'Success');
        return redirect()->route('audio.manage');
    }

    public function delete($id)
    {
        $audioCount = Audio::count();

        if ($audioCount <= 1) {
            toastr()->error('Cannot delete the last audio!', 'Error');
            return redirect()->route('audio.manage');
        }

        $audio = Audio::findOrFail($id);
        $audio->delete();

        toastr()->success('Audio deleted successfully', 'Success');
        return redirect()->route('audio.manage');
    }
}
