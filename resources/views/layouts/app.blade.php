<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title','')</title>

    <!-- linked bootstrap styles here, check directory : views?includes?styles -->

    @include('includes.styles')


  </head>



  <body id="page-top">

    <!-- Navigation -->
    <!-- check directory view/includes/nav for edit -->
   @include('includes.nav')
    

    <!-- check directory views/includes/header for edit -->

   

    <!--  body contend to be yielded to the respective pages, we shift it to  dir? view?welcome
    we use welcome becaue in routes/web we referenced welcome as our home view/page -->


     @yield('content')
    

    <!-- check directory : views/includes/footer for edit or reference -->

    @include('includes.footer')


    <!-- Bootstrap core JavaScript -->
    @include('includes.scripts')

  </body>


</html>
