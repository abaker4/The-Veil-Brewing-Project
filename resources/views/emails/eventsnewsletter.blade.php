
@component('mail::message')
Party People!

@component('mail::promotion')
@foreach($events as $event)
  {{$event->title}}

{{$event->body}}


{{$event->start->toDayDateTimeString()}}


{{$event->end->toDayDateTimeString()}}


    @endforeach
@endcomponent

For special events, please email events@theveilbrewing.com.
Also, follow us on social media!

@component('mail::button', ['url' => 'www.theveilbrewing.com', 'color' => 'red'])
Come Join Us!
@endcomponent

Cheers,<br>
The Veil
@endcomponent

@component('mail::subcopy')
If you are having trouble selecting the button, copy and paste our URL www.theveilbrewing.com into your browser.
@endcomponent