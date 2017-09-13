@component('mail::message')
# <strong>Welcome</strong>
We are a craft brewery located in the Scott's Addition neighborhood of Richmond, Virginia. We focus on hop forward beers, high gravity and barrel aging, lagers, wild ales, and spontaneous fermentation. We are dedicated to quality and strive to provide a unique experience through our beers and our tasting room. We look forward to seeing you soon. Cheers!


@component('mail::panel')
<strong>ABOUT US</strong>

The Veil Brewing Co. was founded by Dustin Durrance and Matt Tarpey in 2016. We brew craft beers for draft consumption and cans in limited release. We believe local breweries play an important role in their communities which is why, the neighborhood of Scott's Addition was such a good fit for The Veil. Our tap room is open to the public and we also offer tours of our brewery (by appointment).

@endcomponent
@component('mail::button', ['url' => 'www.theveilbrewing.com'])
Set Up Tour!
@endcomponent

@component('mail::promotion')
<strong>We Push The Limits</strong>

At The Veil no two beers are alike because we aim to re-invent with each and every brew. We constantly are innovating to keep your taste buds guessing, so the only the way to find out is to see for yourself!

@component( 'mail::button', ['url' => 'www.theveilbrewing.com'])
See Whats On Tap!
@endcomponent
@endcomponent


@component('mail::panel')
The Veil is dedicated to creating the best possible product for its customers, and will stop at nothing.
We also are dedicated to the conservation of this planet. We are 100% energy efficient and recycle focused. To learn more or how to get involved, check out our conservation page.
@endcomponent

@component('mail::button', ['url' => 'www.theveilbrewing.com'])
Learn More!
@endcomponent



Cheers,<br/>
The Veil
@endcomponent

@component('mail::subcopy')
If you are having trouble selecting the button, copy and paste our URL www.theveilbrewing.com into your browser.
To unsubscribe from these messages.
@endcomponent

