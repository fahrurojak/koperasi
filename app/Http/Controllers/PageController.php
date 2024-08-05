<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loan()
    {
        return view('loan.index');
    }

    public function member()
    {
        return view('member.index');
    }

    public function news()
    {
        return view('news.index');
    }

    public function about()
    {
        return view('about.index');
    }
}
