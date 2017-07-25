@if (env('APP_ENV', 'local') === 'local')
    <link rel="stylesheet" href="{{asset('css/app.css') }}">
@elseif (env('APP_ENV', 'local') === 'production')
    <link rel="stylesheet" href="{{asset('css/app.min.css') }}">
@endif