<x-mail::message>
# Hi! Shahidul

Someone trying to get attached to you. Details are given bellow

### Name: {{$inputs['first_name']." ".$inputs['last_name']}}
### Email: {{$inputs['email']}}
#### Message: 

{{$inputs['message']}}

### Ipinfo

{!! $ip !!}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
