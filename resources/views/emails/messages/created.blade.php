@component('mail::message')
# Hey Admin

- {{ $msg->name }}
- {{ $msg->email }}

@component('mail::panel')
    {{ $msg->message }}
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
