<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $partners = Client::latest()->get();
        return view('frontend.partners', compact('partners'));
    }
}
