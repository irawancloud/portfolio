<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $url = "home";
        $aktif = "active";
        return view('pages.index', [
            'aktif' => $aktif,
            'url' => $url,
        ]);
    }

    public function about()
    {
        $url = "about";
        $aktif = "active";
        return view('pages.about', [
            'aktif' => $aktif,
            'url' => $url,
        ]);
    }

    public function contact()
    {
        $url = "contact";
        $aktif = "active";
        return view('pages.contact', [
            'aktif' => $aktif,
            'url' => $url,
        ]);
    }

    public function portfolio()
    {
        $url = "portfolio";
        $aktif = "active";
        return view('pages.portfolio', [
            'aktif' => $aktif,
            'url' => $url,
        ]);
    }

    public function blog()
    {
        $url = "blog";
        $aktif = "active";
        return view('pages.blog', [
            'aktif' => $aktif,
            'url' => $url,
        ]);
    }

    public function blogPost()
    {
        $url = "blog";
        $aktif = "active";
        return view('pages.blogPost', [
            'aktif' => $aktif,
            'url' => $url,
        ]);
    }
}
