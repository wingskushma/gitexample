<html>​

    <head>​

<title>My Site | @yield('title', 'Home Page')</title> </head>​

<body>​

    <div class="container">​

            @yield('content')​

     </div>​

    @section('footerScripts')​

           <script src="app.js"></script> ​

           <span>This is footer from parent </span> ​
    @show​

 </body>​

</html>​
