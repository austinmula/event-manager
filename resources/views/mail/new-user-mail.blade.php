@component('mail::message')
    ### Your account was created successfully

    Your default details are:
    - [email] - {{$data->email}}
    - [password] - {{$data->password}}

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
