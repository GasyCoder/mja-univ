<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

class CheckSiteStatus
{
    public function handle(Request $request, Closure $next)
    {
        $settings = Setting::first();

        // Vérifiez si $settings est null avant d'essayer d'accéder à ses propriétés
        if ($settings && !$settings->is_siteactive) {

            // Si l'utilisateur est un administrateur, laissez passer la requête.
            if (Auth::check() && (Auth::user()->id == 1)) {
                return $next($request);
            }

            // Si le site est désactivé et que l'utilisateur n'est pas un administrateur,
            // redirigez vers une page avec le message désactivé.
            return response(view('site_disabled', ['message' => $settings->message_disabled]));
        }

        return $next($request);
    }

}

