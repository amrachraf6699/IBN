<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationsController extends Controller
{
    public function delete(Invitation $invitation)
    {
        $invitation->delete();

        return redirect()->back()->with('success', __('dashboard.deleted_successfully'));
    }
}
