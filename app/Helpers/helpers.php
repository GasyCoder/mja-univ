<?php

use App\Models\Setting;

if (!function_exists('get_settings')) {
    function get_settings()
    {
        $settings = Setting::first();

        return [
            'site_name' => $settings->site_name,
            'copyright' => $settings->copyright,
            'email' => $settings->email,
            'phone' => $settings->phone,
            'adresse' => $settings->adresse,
            'description' => $settings->description,
            'facebook' => $settings->facebook,
            'twitter' => $settings->twitter,
            'linkdin' => $settings->linkdin,
            'slogan' => $settings->slogan,
            'logo'  => $settings->logo,
            'keywords' => is_array($settings->keywords) ? implode(',', $settings->keywords) : implode(',', explode(',', $settings->keywords)),
        ];
    }
}
