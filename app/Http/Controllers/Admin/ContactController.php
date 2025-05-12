<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'address_uz' => 'nullable|string',
            'address_ru' => 'nullable|string',
            'address_en' => 'nullable|string',
            'email' => 'nullable|email',
            'phone1' => 'nullable|string',
            'phone2' => 'nullable|string',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'telegram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'twitter' => 'nullable|url',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return redirect()->back()->with('success', 'Kontakt muvaffaqiyatli yangilandi.');
    }
}

