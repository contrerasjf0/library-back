@if (env('APP_ENV', 'local') === 'local')
    <script src="{{asset('js/build/build.js') }}"></script>
@elseif (env('APP_ENV', 'local') === 'production')
    <script src="{{asset('js/build/build.js') }}"></script>
@endif