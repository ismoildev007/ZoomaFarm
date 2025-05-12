<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutTeam;
use App\Models\AnswerQuestion;
use App\Models\News;
use App\Models\Partner;
use App\Models\Document;
use App\Models\Product;
use App\Models\PrivacyPolicy;
use App\Models\Vacancy;
use App\Models\Mission;
use App\Models\Values;
use App\Models\Strategy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class MainController extends Controller
{
    public function home()
    {
        $lang = App::getLocale();
        $latestProducts = Product::orderBy('created_at', 'desc')
            ->take(3)
            ->get(); // So‘nggi 3 ta boshqa mahsulot
        $latestVacancy = Vacancy::orderBy('created_at', 'desc')->take(3)->get();
        $latestNews = News::orderBy('created_at', 'desc')->take(3)->get();
        $partners = Partner::orderBy('created_at', 'desc')->take(3)->get();
        return view('pages.home',compact('latestProducts','lang','latestVacancy','latestNews', 'partners'));
    }

    public function cooperation()
    {
        $lang = App::getLocale();
        $latestProducts = Product::orderBy('created_at', 'desc')
            ->take(3)
            ->get(); // So‘nggi 3 ta boshqa mahsulot
        $latestVacancy = Vacancy::orderBy('created_at', 'desc')->take(3)->get();
        $latestNews = News::orderBy('created_at', 'desc')->take(3)->get();
        $partners = Partner::orderBy('created_at', 'desc')->take(3)->get();
        $partners = Partner::orderBy('created_at', 'desc')->take(3)->get();
        return view('pages.page-cooperation',compact('latestProducts','lang','latestVacancy','latestNews', 'partners'));


    }

    public function about()
    {
        $lang = App::getLocale();
        $about = About::first();
        return view('pages.about', compact('about', 'lang'));
    }
    public function aboutTeam()
    {
        $lang = App::getLocale();
        $aboutTeam  = AboutTeam::first();
        return view('pages.about-team', compact('aboutTeam', 'lang'));
    }

    public function direction()
    {
        $lang = App::getLocale();
        $aboutTeam  = AboutTeam::first();
        $missions = Mission::first();
        $values = Values::first();
        $strategies = Strategy::first();
        return view('pages.company_direction', compact('aboutTeam','missions','values','strategies','lang'));
    }

    public function contact()
    {
        $file = 'salom';
        $crossValidationError = 'alik';
        return view('pages.contact-us', compact('file', 'crossValidationError'));
    }
    public function news()
    {
        $newsLatest1 = News::latest('date')->first();
        $newsLatest3 = News::latest('date')->skip(1)->take(3)->get();
        $news = News::latest('date')->skip(4)->take(PHP_INT_MAX)->get();

        return view('pages.page-news', compact('newsLatest1', 'newsLatest3', 'news'));
    }


    public function singleNews($id)
    {
        $news = News::where('id', $id)->firstOrFail();
        return view('pages.single-news', compact('news'));
    }

    public function products()
    {
        $latestNews = News::orderBy('created_at', 'desc')->take(3)->get();
        $products = Product::all();
        $faqs = AnswerQuestion::where('type', '=', 'product')->get();
        $lang = App::getLocale();
        return view('pages.page-products', compact('products','latestNews', 'faqs', 'lang'));
    }

    public function singleProduct($id)
    {
        $lang = App::getLocale();
        $latestProducts = Product::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get(); // So‘nggi 3 ta boshqa mahsulot

        $product = Product::where('id', $id)->firstOrFail();
        return view('pages.single-product', compact('product', 'latestProducts','lang'));
    }

    public function vacancy()
    {
        $vacancies = Vacancy::all();
        $lang = App::getLocale();
        $latestNews = News::orderBy('created_at', 'desc')->take(3)->get();
        $faqs = AnswerQuestion::where('type', '=', 'vacancy')->get();
        return view('pages.vacancy',compact('latestNews','lang','vacancies', 'faqs'));
    }
    public function singleVacancy($id)
    {
        $news = Vacancy::where('id', $id)->firstOrFail();
        return view('pages.single-vacancy', compact('news'));
    }

    public function documents()
    {
        $documents = Document::all();
        $lang = App::getLocale();
        $latestNews = News::orderBy('created_at', 'desc')->take(3)->get();
        return view('pages.page-document',compact('latestNews','lang','documents'));
    }
    public function singleDocument($id)
    {
        $document = Document::where('id', $id)->firstOrFail();
        return view('pages.single-document', compact('document'));
    }
    public function candidant($vacancy_id)
    {
        $lang = App::getLocale();
        $vacancy = Vacancy::findOrFail($vacancy_id);
        return view('pages.candidant',compact('vacancy','lang'));
    }

    public function privacy_policy()
    {
        $privacyPolicies  = PrivacyPolicy::first();
        $lang = app()->getLocale();
        return view('pages.privacy_policy', compact('privacyPolicies', 'lang'));
    }

    private function sendToTelegram(Request $request)
    {
        $token = '7674421439:AAGc9RX1cjNk8ua-VtD9oWrpJC4qQFZC9oM';
        $chat_id = '6583641407';
        //    protected $botToken = '7674421439:AAGc9RX1cjNk8ua-VtD9oWrpJC4qQFZC9oM';
//    protected $chatId = '6583641407';
        function escapeMarkdown($text) {
            $special_chars = ['_', '*', '[', ']', '(', ')', '~', '`', '>', '#', '+', '-', '=', '|', '{', '}', '.', '!'];
            return str_replace($special_chars, array_map(fn($c) => '\\' . $c, $special_chars), $text);
        }

        $message = "⚖️ *Yangi mijoz xabar qoldirdi* ⚖️\n" .
            "👤 *Ism:* " . escapeMarkdown($request->name) . "\n" .
            "📞 *Telefon raqam:* " . escapeMarkdown($request->phone_number ?? 'N/A') . "\n" .
            "📝 *Xabar:* " . escapeMarkdown($request->description) . "\n" .

        $client = new Client();
        $url = "https://api.telegram.org/bot{$token}/sendMessage";

        $client->post($url, [
            'form_params' => [
                'chat_id' => $chat_id,
                'text' => $message,
            ],
        ]);
    }

}


