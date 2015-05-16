<html>
    <head>
        <title>
          @yield('title')
        </title>
        <link rel='stylesheet' href='components/bootstrap334dist/css/bootstrap.min.js'>
  <!-- js -->
	<script src= "components/jquery/jquery-1.11.3.min.js" ></script>
	<script src= "components/bootstrap334dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        @yield('content')
        @yield('about_me')
        @yield('contact_me')
        @yield('footer')
    </body>    
</html>