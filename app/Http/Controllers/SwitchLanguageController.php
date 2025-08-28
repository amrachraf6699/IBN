<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwitchLanguageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($lang)
    {
        if(in_array($lang, ['en', 'ar'])) {
            session()->put('locale', $lang);
            app()->setLocale($lang);
        }

        session()->flash('success', __('dashboard.language_changed_successfully'));
        return redirect()->back();
    }
}
