<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = [
            'whatsapp_number' => Setting::get('whatsapp_number', '+62 853-3657-3814'),
            'instagram_url' => Setting::get('instagram_url', 'https://www.instagram.com/oymadear.id/'),
            'whatsapp_message_template' => Setting::get('whatsapp_message_template', "Halo admin oymadear 👋\nSaya ingin memesan bucket"),
        ];
        
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'whatsapp_number' => 'required|string',
            'instagram_url' => 'required|url',
            'whatsapp_message_template' => 'required|string',
        ]);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value);
        }

        return redirect()->route('admin.settings.index')
            ->with('success', 'Settings updated successfully.');
    }
}
