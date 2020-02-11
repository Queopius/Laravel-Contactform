@component('mail::message')
# Introduction

There is new query from {{$message}}
<br>
Message:
{{$name}}

@component('mail::button', ['url' => ''])
Go back to the web
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
