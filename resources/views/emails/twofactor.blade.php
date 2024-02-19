@component('mail::message')
# {{ $details['title'] }}

Voici votre code: **{{ $details['code'] }}**

{{-- @component('mail::button', ['url' => ''])
Action Text
@endcomponent --}}

Cordialement,
{{ config('app.name') }}
@endcomponent
