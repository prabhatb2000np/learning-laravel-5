<html>
    <head>
        <title>
          @yield('title')
        </title>
        <!--link rel="stylesheet" href="components/bootstrap334dist/css/bootstrap.min.css">
      	<script src= "components/jquery/jquery-1.11.3.min.js" ></script>
	<script src= "components/bootstrap334dist/js/bootstrap.min.js"></script-->
        <link href="{{ asset('components/bootstrap334dist/css/bootstrap.min.css')
   }}" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet">
    </head>
    <body>
       @if(\Session::has('flash_message'))
       <div class='alert alert-success'>{{\Session::get('flash_message')}}</div>
       @endif
    
       
        @yield('content')
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
       
        @yield('footer')
    </body>    
</html>