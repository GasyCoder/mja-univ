<?php

namespace App\Http\Controllers\Auth;

use App\Models\UserCode;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\SendTwoFactorCode;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Session;

class TwoFAController extends Controller
{
    public function index(): View
    {
        return view('auth.2Factor');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => ['required'],
        ]);

        $find = UserCode::where('user_id', auth()->id())
            ->where('code', $request->code)
            ->where('updated_at', '>=', now()->subMinutes(2))
            ->first();

        if (!is_null($find)) {
            session(['user_2fa' => auth()->id()]);
            return redirect()->route('admin');
        }

        return back()->with('error', 'Vous avez entré un mauvais code.');
    }

    public function resend()
    {
        $user = auth()->user();
        $user->generateCode();

        return back()->with('status', 'Nous vous avons envoyé le code sur votre email.');
    }
}


