
<!DOCTYPE html>
<html lang="en" data-footer="true" data-override='{"attributes": {"placement": "vertical", "layout": "boxed" }, "storagePrefix": "ecommerce-platform"}'>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Organic Laravel Website | @yield('title')</title>
    <meta name="description" content="Ecommerce Dashboard" />

    @include('bakend.layout.inc.style')
  </head>

  <body>
    <div id="root">
        @include('bakend.layout.inc.menu')
      <main>
        <div class="container">
            @include('bakend.layout.inc.breadcum')
            @yield('admin_content')
        </div>
      </main>
      <!-- Layout Footer Start -->
      @include('bakend.layout.inc.footer')
      <!-- Layout Footer End -->
    </div>
    @include('bakend.layout.inc.script')
  </body>
</html>
