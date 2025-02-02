<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('vendor/errehub/laravel-alert/css/alert.css') }}?v={{ time() }}">
</head>
<body>
    @if (session('alert_message'))
        <div class="alert alert-info hide">
            <span>
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                </svg>
            </span>
            <p>{{ session('alert_message') }}</p>
        </div> 
    @endif

    <script src="{{ asset('vendor/errehub/laravel-alert/js/alert.js') }}?v={{ time() }}"></script>
</body>
</html>

