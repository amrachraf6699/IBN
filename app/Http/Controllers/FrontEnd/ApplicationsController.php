<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function check($uuid)
    {
        $application = Application::where('uuid', $uuid)->first();
        if (!$application) {
            abort(404);
        }

        return view('frontend.application.check', compact('application'));
    }
}
