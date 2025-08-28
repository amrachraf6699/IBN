<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\Settings\UpdateContactSettingsRequest;
use App\Http\Requests\Manage\Settings\UpdateGeneralContactSettingsRequest;
use App\Http\Requests\Manage\Settings\UpdateGeneralSettingsRequest;
use App\Models\Statistic;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $statistics = Statistic::all();
        return view('manage.settings.index');
    }

    public function updateGeneral(UpdateGeneralSettingsRequest $request)
    {
        settings()->update($request->validated());

        return redirect()->back()->with('success', __('dashboard.updated_successfully'));
    }

    public function updateContact(UpdateContactSettingsRequest $request)
    {
        settings()->update($request->validated());

        return redirect()->back()->with('success', __('dashboard.updated_successfully'));
    }

public function updateStatistics(UpdateGeneralContactSettingsRequest $request)
{
    $statisticsData = $request->input('statistics');

    foreach ($statisticsData as $data) {
        if (isset($data['id'])) {
            Statistic::where('id', $data['id'])->update([
                'name' => [
                    'ar' => $data['name']['ar'],
                    'en' => $data['name']['en'],
                ],
                'value' => $data['value'],
            ]);
        } else {
            Statistic::create([
                'name' => [
                    'ar' => $data['name']['ar'],
                    'en' => $data['name']['en'],
                ],
                'value' => $data['value'],
            ]);
        }
    }

    return redirect()->back()->with('success', __('dashboard.updated_successfully'));
}

}
