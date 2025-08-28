<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\News;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Statistic;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $statistics = Statistic::all();
        $services = Service::latest()->take(3)->get();
        $partners = Client::latest()->take(5)->get();
        $news = News::latest()->take(3)->get();
        $team = Team::latest()->take(4)->get();
        $sliders = Slider::latest()->get();
        return view('frontend.home', compact('statistics', 'services', 'partners', 'news', 'team', 'sliders'));
    }
}
