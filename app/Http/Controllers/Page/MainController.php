<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function home()
    {
        return view('pages.home');
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
        return view('pages.page-products');
    }
    public function singleProduct($slug)
    {
        return view('pages.single-product');
    }

    public function vacancy()
    {
        return view('pages.vacancy');
    }
    public function candidant($vacancy_id)
    {
        return view('pages.candidant');
    }
}
