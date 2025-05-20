<?php

namespace App\Http\Controllers;

use App\Models\PartnerRequest;
use Illuminate\Http\Request;

class PartnerRequestController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string',
            'contact_person' => 'required|string',
            'phone' => 'required|string',
            'email' => 'nullable|email',
            'message' => 'nullable|string',
            'inn' => 'nullable',
        ]);

        PartnerRequest::create($request->all());

        return back()->with('success', 'Your partnership request has been submitted!');
    }

    public function index()
    {
        $partnerRequests = PartnerRequest::latest()->paginate(10);
        return view('admin.partnerRequest.index', compact('partnerRequests'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:new,reviewed,accepted,rejected',
        ]);

        $requestItem = PartnerRequest::findOrFail($id);
        $requestItem->update(['status' => $request->status]);

        return back()->with('success', 'Status updated.');
    }

    public function destroy($id)
    {
        $request = PartnerRequest::findOrFail($id);
        $request->delete();

        return redirect()->route('partner-requests.index')
            ->with('success', 'Заявка успешно удалена.');
    }

    public function postStore(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string',
            'contact_person' => 'required|string',
            'phone' => 'required|string',
            'email' => 'nullable|email',
            'message' => 'nullable|string',
            'inn' => 'nullable',
        ]);

        PartnerRequest::create($request->all());

        return back()->with('success', 'Your partnership request has been submitted!');
    }
}
