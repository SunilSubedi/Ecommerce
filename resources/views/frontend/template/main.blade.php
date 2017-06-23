@include('frontend.template.layout.header')
<body>
       
      @include('frontend.template.layout.navigation')
      <div class="container">
      @yield('content')



     </div>
     @include('frontend.template.layout.footer')
</body>
</html>
