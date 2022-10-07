<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\AppSettings;
use App\Models\Item;
use App\Models\Post;
use App\Models\Services;
use App\Models\Skills;
use App\Models\Statistics;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $info = AppSettings::first();
        $services = Services::latest()->take(6)->get();
        $posts = Post::latest()->take(6)->get();
        $items = Item::latest()->take(6)->get();
        $statistics = Statistics::first();
        $skills = Skills::latest()->get();
        return view('pages.HomePage.homepage', compact('info', 'services', 'posts', 'items', 'statistics', 'skills'));
    }
}
