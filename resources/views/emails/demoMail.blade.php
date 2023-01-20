@component('mail::message')
    # {{ $emailData['title'] }}
    The body of your message.

    {{-- <body>
        Here is an image:

        <img src="{{ $emailData['path'] }}">
    </body> --}}
    @component('mail::button', ['url' => $emailData['url']])
        Button Text
    @endcomponent
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
