<x-mail::message>
# Hi {{$username}}

We received a request to reset your password. Click the link below to set a new password:

<x-mail::button :url="$resetLink">
Reset your password
</x-mail::button>

If you did not request a password reset, please ignore this email or contact our support team.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
