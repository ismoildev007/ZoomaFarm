<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Product;
use App\Models\Vacancy;
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
        return view('pages.home',compact('latestProducts','lang','latestVacancy','latestNews'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function aboutTeam()
    {
        return view('pages.about-team');
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
        return view('pages.page-products', compact('products','latestNews'));
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
        return view('pages.vacancy',compact('latestNews','lang','vacancies'));
    }
    public function candidant($vacancy_id)
    {
        $lang = App::getLocale();
        $vacancy = Vacancy::findOrFail($vacancy_id);
        return view('pages.candidant',compact('vacancy','lang'));
    }
}
