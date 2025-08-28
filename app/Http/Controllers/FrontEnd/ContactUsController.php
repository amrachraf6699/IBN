<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactUsRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ContactUsRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->route('home')->with('success', __('frontend.thanks_for_your_message'));
    }
}
