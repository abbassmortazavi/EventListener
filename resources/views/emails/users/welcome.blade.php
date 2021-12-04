@component('mail::message')
# Email verification
<h1>{{ $user->name }}</h1>
The body of your message.

@component('mail::button', ['url' => 'http://localhost:8000'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
