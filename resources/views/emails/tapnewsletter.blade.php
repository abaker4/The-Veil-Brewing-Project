@component('mail::message')
@component('mail::panel')
<strong>Welcome To The Veil Where No Two Beers Are Alike!</strong>
@endcomponent

We aim to push the limits with each and
every brew which is why we are constantly
are innovating to keep your taste buds guessing.
Come check us out and see for yourself!



@component('mail::promotion')
@component('mail::panel')
<strong>Here's Whats Pouring</strong>
@endcomponent
@endcomponent


@component('mail::promotion')
@component('mail::table')




@foreach($taps as $tap)

|      Title     |      Type      |      ABV       |      Small ($)   |      Large ($)    |
| :-----------:  | :------------: | :------------: | :---------------:|:----------------: |
|{{$tap->title}} | {{$tap->type}} | {{$tap->ABV}}% |  ${{$tap->small}}|  ${{$tap->large}} |



@endforeach
@endcomponent
@endcomponent

@component('mail::button', ['url' => 'www.theveilbrewing.com', 'color' => 'blue'])
Come Hang!
@endcomponent

@component('mail::promotion')
@component('mail::panel', ['url' => 'www.theveilbrewing.com'])
Open Hours:<br/>
Tuesday - Thursday 4PM-9PM <br/>
Friday 4PM-10PM<br/>
Saturday 12PM-10PM<br/>
Sunday 12PM-6PM
@endcomponent
@endcomponent


Cheers,<br>
The Veil
@endcomponent

@component('mail::subcopy')
If you are having trouble selecting the button, copy and paste our URL www.theveilbrewing.com into your browser.
To unsubscribe from these messages.
@endcomponent
