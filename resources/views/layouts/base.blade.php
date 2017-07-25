<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Library - @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">

        @include('resource.injectCss')
          <!-- inject:css -->
          <!--<link rel="stylesheet" href="/assets/css/style.css">-->
          <!-- endinject -->
    </head>
    <body>
        <div class="library">
           <div class="container-fluid library">

                @include('components.layout.header')

                <section class=" row body  d-flex  flex-column justify-content-center align-items-center">
                    <div class="body__sections col-8">
                        @yield('content')
                    </div>
                </section>
                
                @include('components.layout.footer')

            </div>
        </div>

        @include('resource.injectJs')
    </body>
</html>