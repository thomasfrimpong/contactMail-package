@component('mail::message')
# Test Alert

This is a query from {{$name}} <br>

{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
Thomas Frimpong
@endcomponent
