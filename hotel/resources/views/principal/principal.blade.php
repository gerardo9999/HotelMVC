<!DOCTYPE html>
<html>
    @include('components.head')
  <body class="skin-green sidebar-mini">
  <!-- skin-purple sidebar-mini -->
  <!-- skin-green sidebar-mini -->
  <!-- hold-transition skin-blue-light sidebar-mini -->
<div class="wrapper">

        @include('components.header')
       
        <aside class="main-sidebar">
            @include('components.sidebar')
        </aside>

    <!--Contenido-->
    <div class="content-wrapper" style="min-height: 787px;">
        
        @yield('contenido')
          
    </div>

</div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versión</b> 7.0
        </div>
        <strong>Copyright ©2020 <a href="http://obedalvarado.pw/" target="_blank">Sistema Web Inventario</a></strong> Derechos reservados.
      </footer>    
  <script src="{{ asset('/plantilla/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{ asset('/plantilla/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('/plantilla/js/app.min.js')}}"></script>
  </body>
</html>
    

    
