<?php

namespace App\Rules;

use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Validation\Rule;


class Recaptcha implements Rule
{

    public function passes($attribute, $value)
    {
        $response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $value,
            'ip' => request()->ip(),
        ]);

        //dd($response->json());

        if ($response->successful() && $response->json('success') && $response->json('score') > config('services.recaptcha.min_score')) {
            return true;
        }

        return false;
    }

    public function message()
    {
        return 'Échec de la validation de ReCaptcha.';
    }
}
