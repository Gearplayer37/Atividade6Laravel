<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Yield refere-se a um campo que vem por parametro do controller. -->
    <title>Super Gestão</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css')}}">
</head>
<body>
    <!-- Inclusão do arquivo topo. -->
    @include('site.layouts._partials.topo')
    <!-- Aqui depende da view que for chamada para se tornar mais flexível. -->
    @yield('conteudo')
</body>
</html>