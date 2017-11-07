@component('mail::message')
# Hey Admin

- {{ $name }}
- {{ $mail }}

@component('mail::panel')
    - {{ $message }}
    This is the panel content.
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
