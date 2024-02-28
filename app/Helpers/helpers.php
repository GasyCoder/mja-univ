<?php

use App\Models\Regle;
use App\Models\Setting;

if (!function_exists('get_settings')) {
    function get_settings()
    {
        $settings = Setting::first();

        if ($settings) {
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
                'type_header' => $settings->type_header,
                'keywords' => is_array($settings->keywords) ? implode(',', $settings->keywords) : implode(',', explode(',', $settings->keywords)),
            ];
        }

        // retourner un tableau vide ou des valeurs par défaut si $settings est null
        return [];
    }
}

if (!function_exists('get_rule')) {
    function get_rule($type)
    {
        $rule = Regle::where('type', $type)->first();

        if ($rule) {
            return [
                'slug'      => $rule->slug,
                'uuid'      => $rule->uuid,
                'ttle'      => $rule->title,
                'body'      => $rule->html,
            ];
        }

        // retourner un tableau vide ou des valeurs par défaut si $settings est null
        return [];
    }
}

if (!function_exists('get_rule_one')) {
    function get_rule_one()
    {
        return get_rule(false);
    }
}

if (!function_exists('get_rule_to')) {
    function get_rule_to()
    {
        return get_rule(true);
    }
}
