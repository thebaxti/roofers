<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('site.index', compact('settings'));
    }

    public function about()
    {
        return view('site.about');
    }

    public function services()
    {
        return view('site.services');
    }

    public function contact()
    {
        return view('site.contact');
    }
}
