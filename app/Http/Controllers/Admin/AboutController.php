<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function __construct()
    {
        if (!Auth::check() || !in_array(Auth::user()->role, [1, 2])) {
            abort(403, 'Ushbu sahifaga kirish ruxsati yo‘q.');
        }
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.abouts.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($about->image && Storage::exists($about->image)) {
                Storage::delete($about->image);
            }
            $about->image = $request->file('image')->store('abouts/images', 'public');
        }

        // Fotoni saqlash
        if ($request->hasFile('content_image')) {
            if ($about->photo && Storage::exists($about->photo)) {
                Storage::delete($about->photo);
            }
            $about->photo = $request->file('photo')->store('abouts/content_image', 'public');
        }

        if ($request->filled('youtube_link')) {
        $about->youtube_link = $request->input('youtube_link');
    }

        $about->update($request->all());

        return redirect()->back()->with('success', 'Data updated successfully');

        
    }


}
