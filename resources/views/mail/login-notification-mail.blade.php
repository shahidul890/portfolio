<x-mail::message>
# Hi {{$loginDetails['name']}}

The body of your message.

We noticed a new login to your account.

Date and Time: {{$loginDetails['time']}} <br/>
IP: {{$loginDetails['ip']}} <br/>
Device: {{$loginDetails['device']}} <br/>

If this was you, no further action is needed. If you did not recognize this activity, please secure your account immediately by resetting your password.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
