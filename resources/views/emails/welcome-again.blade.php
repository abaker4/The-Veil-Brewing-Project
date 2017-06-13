@component('mail::message')
# Introduction

The body of your message.

-one

-two

-three

@component('mail::button', ['url' => 'www.theveilbrewing.com'])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
Drop it like its hott!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
