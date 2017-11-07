@component('mail::message')
# Hey Admin

- {{ $name }}
- {{ $mail }}

@component('mail::panel')
    {{ $message }}
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
