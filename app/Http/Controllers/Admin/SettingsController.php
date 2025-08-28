<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function getSocial()
    {
        $settings =
            [
                'facebook' => $this->getSettings('facebook'),
                'twitter' => $this->getSettings('twitter'),
                'instagram' => $this->getSettings('instagram'),
                'linkedin' => $this->getSettings('linkedin'),
                'youtube' => $this->getSettings('youtube'),
                'tiktok' => $this->getSettings('tiktok'),
                'whatsapp' => $this->getSettings('whatsapp'),
            ];


        return view('admin.settings.social', compact('settings'));
    }

    public function updateSocial(Request $request)
    {
        $data = $request->validate([
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'youtube' => 'nullable|url',
            'tiktok' => 'nullable|url',
            'whatsapp' => 'nullable|url',
        ]);

        foreach ($data as $key => $value) {
            $this->setSettings($key, $value);
        }

        return redirect()->back()->with('success', 'Social settings updated successfully.');
    }

    public function getMail()
    {
        $settings = [
            'mail_host' => $this->getSettings('mail_host'),
            'mail_port' => $this->getSettings('mail_port'),
            'mail_username' => $this->getSettings('mail_username'),
            'mail_password' => $this->getSettings('mail_password'),
            'mail_encryption' => $this->getSettings('mail_encryption'),
            'mail_from_address' => $this->getSettings('mail_from_address'),
            'mail_from_name' => $this->getSettings('mail_from_name'),
        ];

        return view('admin.settings.mail', compact('settings'));
    }

    public function updateMail(Request $request)
    {
        $data = $request->validate([
            'mail_host' => 'required|string',
            'mail_port' => 'required|integer',
            'mail_username' => 'required',
            'mail_password' => 'required|string',
            'mail_encryption' => 'nullable|in:tls,ssl',
            'mail_from_address' => 'required|email',
            'mail_from_name' => 'required|string',
        ]);

        foreach ($data as $key => $value) {
            $this->setSettings($key, $value);
        }

        return redirect()->back()->with('success', 'Mail settings updated successfully.');
    }

    public function testMail(Request $request)
    {
        try {
            $validated = $request->validate([
                'mail_host' => 'required|string',
                'mail_port' => 'required|integer',
                'mail_username' => 'required',
                'mail_password' => 'required|string',
                'mail_encryption' => 'nullable|in:tls,ssl',
                'mail_from_address' => 'required|email',
                'mail_from_name' => 'required|string',
            ]);

            config([
                'mail.mailers.smtp.host' => $validated['mail_host'],
                'mail.mailers.smtp.port' => $validated['mail_port'],
                'mail.mailers.smtp.username' => $validated['mail_username'],
                'mail.mailers.smtp.password' => $validated['mail_password'],
                'mail.mailers.smtp.encryption' => $validated['mail_encryption'],
                'mail.from.address' => $validated['mail_from_address'],
                'mail.from.name' => $validated['mail_from_name'],
            ]);

            \Mail::raw('This is a test email to verify your mail configuration.', function ($message) use ($validated) {
                $message->to($validated['mail_from_address'])
                    ->subject('Mail Configuration Test - ' . config('app.name'));
            });

            return response()->json([
                'success' => true,
                'message' => 'Test email sent successfully! Check your inbox.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Mail test failed: ' . $e->getMessage()
            ], 422);
        }
    }

    public function getWebsite()
    {
        $settings = [
            'site_name' => $this->getSettings('site_name'),
            'site_description' => $this->getSettings('site_description'),
            'site_keywords' => $this->getSettings('site_keywords'),
            'site_logo' => $this->getSettings('site_logo'),
            'site_favicon' => $this->getSettings('site_favicon'),
        ];

        return view('admin.settings.website', compact('settings'));
    }

    public function updateWebsite(Request $request)
    {
        $data = $request->validate([
            'site_name' => 'required|string|max:255',
            'site_description' => 'required|string|max:500',
            'site_keywords' => 'required|string|max:255',
            'site_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'site_favicon' => 'nullable|file|mimes:ico,png,jpg,jpeg,gif,svg|max:1024',
        ]);

        // Handle logo upload
        if ($request->hasFile('site_logo')) {
            // Delete old logo if exists
            $oldLogo = $this->getSettings('site_logo');
            if ($oldLogo && \Storage::disk('public')->exists($oldLogo)) {
                \Storage::disk('public')->delete($oldLogo);
            }

            // Store new logo
            $logoPath = $request->file('site_logo')->store('website', 'public');
            $data['site_logo'] = $logoPath;
        } else {
            // Keep existing logo, don't update it
            unset($data['site_logo']);
        }

        // Handle favicon upload
        if ($request->hasFile('site_favicon')) {
            // Delete old favicon if exists
            $oldFavicon = $this->getSettings('site_favicon');
            if ($oldFavicon && \Storage::disk('public')->exists($oldFavicon)) {
                \Storage::disk('public')->delete($oldFavicon);
            }

            // Store new favicon
            $faviconPath = $request->file('site_favicon')->store('website', 'public');
            $data['site_favicon'] = $faviconPath;
        } else {
            // Keep existing favicon, don't update it
            unset($data['site_favicon']);
        }

        // Update settings
        foreach ($data as $key => $value) {
            $this->setSettings($key, $value);
        }

        return redirect()->back()->with('success', 'Website settings updated successfully.');
    }
}
