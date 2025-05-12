<?php

namespace App\Http\Controllers;

use App\Models\DownloadFile;
use Illuminate\Http\Request;

class DownloadFileController extends Controller
{
        public function index()
    {
        $file = DownloadFile::first();

        return view('admin.fayl.index', compact('file'));
    }

    public function edit($id)
    {   
        $filename = DownloadFile::find($id)->file_name;
        return view('admin.fayl.edit', compact('id','filename'));
    }


    public function update($id, Request $request)
    {
        $request->validate([
        'file' => 'required|mimes:pdf|max:10240', // 10MB ga qadar faqat PDF fayl
        ]);

        $file = DownloadFile::find($id);

        if (!$file) {
            return response()->json(['message' => "Fayl topilmadi"], 404);
        }

        $oldFilePath = public_path('uploads/' . $file->file_name);
        
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath);
        }

        if ($request->hasFile('file')) {
            $newFile = $request->file('file');
            $newFileName =$newFile->getClientOriginalName();
            
            $newFile->storeAs('public/pdf', $newFileName);
            
            $file->update([
                'file_name' => $newFileName,
            ]);

            return redirect()->route('file.index')->with('success', 'Fayl muvaffaqiyatli yangilandi!');
            return redirect()->back()->with('success', 'Fayl muvaffaqiyatli yangilandi!');

            }
            return redirect()->back()->with('success', 'Yangi fayl yuborilmadi');

        }

    public function downloadFile()
        {
            $id=1;
            $file = DownloadFile::findOrFail($id);

            $filePath = storage_path('app/public/pdf/' . $file->file_name);
            
            if (file_exists($filePath)) {
                return response()->download($filePath, $file->file_name);
            } else {
                abort(404, 'Fayl topilmadi');
            }
        }

}
