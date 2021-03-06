<?php

namespace App\Http\Controllers;

use App\Article;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function home()
    {
        return view(
            'pages.home',
            [
                'articles' => Article::where('is_featured', '=', true)
                                ->where('is_published', '=', true)
                                ->orderBy('created_at', 'DESC')
                                ->take(4)
                                ->get()
            ]
        );
    }

    public function book()
    {
        return view('pages.book');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function subscribe()
    {
        return view('pages.subscribe');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
