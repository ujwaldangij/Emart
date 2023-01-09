<?php

namespace App\Http\Controllers\normal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class home extends Controller
{
    //
    public function get_home()
    {
        return view('normal.pages.home');
    }
    public function get_about()
    {
        return view('normal.pages.about');
    }
    public function get_product()
    {
        return view('normal.pages.product');
    }
    public function get_whyus()
    {
        return view('normal.pages.whyus');
    }
    public function get_testimonial()
    {
        return view('normal.pages.testimonial');
    }
}
