<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Page Switching
    public function index() {
        return view('pages.index');
    }

    public function about() {
        return view('pages.about');
    }

    public function shop() {
        return view('pages.shop');
    }

    public function projects() {
        return view('pages.projects');
    }

    public function blog() {
        return view('pages.blog');
    }

}
