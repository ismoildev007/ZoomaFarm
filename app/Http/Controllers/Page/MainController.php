<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
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
        return view('pages.page-news');
    }
    public function singleNews($slug)
    {
        return view('pages.single-news');
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
