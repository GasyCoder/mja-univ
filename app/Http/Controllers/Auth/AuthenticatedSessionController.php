<?php

namespace App\Http\Controllers\Auth;

use App\Rules\Recaptcha;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use App\Notifications\SendTwoFactorCode;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $request->input('g-recaptcha-response'),
            'ip' => request()->ip(),
        ]);
        // dd($response->json());
        if ($response->successful() && $response->json('success') && $response->json('score') > config('services.recaptcha.min_score')) {
            // ReCAPTCHA valid, proceed with login
            $request->authenticate();
            $request->session()->regenerate();

            if (Auth::attempt($request->only('email', 'password'))) {
                $request->user()->generateCode();
                return redirect()->route('2fa.index');
            }

            return redirect()->intended(AppServiceProvider::HOME);
        } else {
            return back()->with(['recaptcha' => 'Échec de la validation de ReCaptcha.']);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
