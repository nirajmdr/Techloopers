<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Techlopers') }}</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href=" https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    </script>
  </head>
  <body>
    @include('inc.navbar')
    @include('inc.messages')

    <div class="container">
      @if(Request::is('/'))
        @include('inc.showcase') {{-- Jumbotron --}}
      @endif
      <div class="row">
        <div class="col-md-12 col-lg-12">
            @yield('content')
        </div>
      </div>
    </div>

@include('inc.footer')
  </body>
</html>
