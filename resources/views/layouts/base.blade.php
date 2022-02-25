<!DOCTYPE html>
<html lang="en">

    <!-- header files --> 
    @include('layouts.head')
    <!-- end header files --> 

    <body class="antialiased">

        <!-- start nav --> 
        @include('layouts.navbar')
        <!-- end nav --> 

        <!-- start content --> 
        @yield('content')
        <!-- end content --> 

        <!-- start footer -->
        @include('layouts.footer')
        <!-- end footer -->

        <!-- start javascritp -->
        @include('layouts.js')
        <!-- end javascritp -->  
          
    </body>
</html>