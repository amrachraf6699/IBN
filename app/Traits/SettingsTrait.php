<?php

namespace App\Traits;


use App\Models\Setting;

trait SettingsTrait
{
    public function getSettings($key)
    {
        $setting = Setting::where('key', $key)->first();
        return $setting ? $setting->value : null;
    }

    public function setSettings($key, $value)
    {
        $setting = Setting::updateOrCreate(
            ['key' => $key],
            ['value' => $value]
        );
        return $setting;
    }
}