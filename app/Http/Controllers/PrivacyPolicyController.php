<?php
namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $privacyPolicies  = PrivacyPolicy::all();
        $lang = app()->getLocale();
        return view('admin.privacy.index', compact('privacyPolicies', 'lang'));
    }

    public function edit()
    {
        $policy = PrivacyPolicy::first();
        return view('admin.privacy.edit', compact('policy'));
    }

    public function update(Request $request)
    {
        $policy = PrivacyPolicy::first();

        $request->validate([
            'content_ru' => 'required|string',
            'content_uz' => 'required|string',
            'content_en' => 'required|string',
        ]);

        $policy->update([
            'content_ru' => $request->content_ru,
            'content_uz' => $request->content_uz,
            'content_en' => $request->content_en,
        ]);

        return redirect()->route('privacy.index')->with('success', 'Privacy policy updated successfully');
    }

}

