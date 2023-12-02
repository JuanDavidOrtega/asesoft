<!DOCTYPE html>
<html lang="es">
  <head>
    $asesores = asesore::find($id_asesores);
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylessheet">
    <title>@yield('title')</title>
  </head>
    <body>
        <div>
           @yield('body')
        </div>
    </body>
</html>