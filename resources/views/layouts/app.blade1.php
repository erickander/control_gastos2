<!doctype html>
<html>
<head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width,initial-scale=1">
       <title> Document </title>
  </head>
  <body>

        <div class="menu" style="background:red;color:white;">

        <a class="btn btn-info text-white" href="{{route('users')}}">usuarios</a>
         <a class="btn btn-info text-white" href="{{route('permisos')}}">permisos</a>

    </div>
    <div class="centro">
        <h1>Area De Trabajo</h1>
        @yield('content')
    </div>
     <div class="footer" style="background:: ;">
         
     </div>
</body>
</html>