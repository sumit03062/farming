<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $pages = ['/', '/about', '/products', '/services', '/contact'];

        $urls = [];

        foreach ($pages as $page) {
            $urls[] = [
                'loc' => url($page),
                'lastmod' => now()->toDateString(),
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ];
        }

        return response()
            ->view('sitemap', compact('urls'))
            ->header('Content-Type', 'text/xml');
    }
}