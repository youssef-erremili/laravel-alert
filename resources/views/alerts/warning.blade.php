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
        <div class="alert alert-warning hide">
            <span>
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
            </span>
            <p>{{ session('alert_message') }}</p>
        </div> 
    @endif

    <script src="{{ asset('vendor/errehub/laravel-alert/js/alert.js') }}?v={{ time() }}"></script>
</body>
</html>

