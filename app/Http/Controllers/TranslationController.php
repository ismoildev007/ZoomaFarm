<?php

namespace App\Http\Controllers;

use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class TranslationController extends Controller
{
    public function update(Request $request)
    {
        $langs = ['uz', 'ru', 'en'];
        $saveKey = $request->input('save_key'); // Faqat bitta kalitni saqlash

        foreach ($langs as $lang) {
            $path = base_path("lang/{$lang}/messages.php");

            if (!File::exists(dirname($path))) {
                File::makeDirectory(dirname($path), 0755, true);
            }

            $translations = File::exists($path) ? include $path : [];

            // Faqat bitta o‘zgargan kalitni yangilaymiz
            if ($request->has("translations.{$lang}")) {
                $translations[$saveKey] = $request->input("translations.{$lang}");
            }

            // Faylga yozamiz
            $content = "<?php\n\nreturn " . var_export($translations, true) . ";\n";
            File::put($path, $content);
        }

        return redirect()->back()->with('success', 'Rus tiliga o‘tish uchun kuting...');

    }

}
