<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AboutTeamController extends Controller
{
    public function __construct()
    {
        if (!Auth::check() || !in_array(Auth::user()->role, [1, 2])) {
            abort(403, 'Ushbu sahifaga kirish ruxsati yo‘q.');
        }
    }

    public function edit($id)
    {
        $aboutTeam = AboutTeam::findOrFail($id);
        return view('admin.about-teams.edit', compact('aboutTeam'));
    }

    public function update(Request $request, $id)
    {
        $aboutTeam = AboutTeam::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($aboutTeam->image && Storage::exists($aboutTeam->image)) {
                Storage::delete($aboutTeam->image);
            }
            $aboutTeam->image = $request->file('image')->store('about_teams/images', 'public');
        }

        // Fotoni saqlash
        if ($request->hasFile('content_image')) {
            if ($aboutTeam->photo && Storage::exists($aboutTeam->photo)) {
                Storage::delete($aboutTeam->photo);
            }
            $aboutTeam->photo = $request->file('photo')->store('about_teams/content_image', 'public');
        }

        $aboutTeam->update($request->all());

        return redirect()->back()->with('success', 'Data updated successfully');
    }
}
