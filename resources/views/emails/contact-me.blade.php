@component('mail::message')
{{-- dont indent anything in this  --}}


# A Heading

Lorem Ipsum dolar sit amet
- A list
- goes
- here

@component('mail::button', ['url'=>'https://laracasts.com'])
    Visit Laracasts
@endcomponent

@endcomponent
