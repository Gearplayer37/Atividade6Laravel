<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Yield refere-se a um campo que vem por parametro do controller. -->
    <title>Super Gestão</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo e(asset('css/estilo_basico.css')); ?>">
</head>
<body>
    <!-- Inclusão do arquivo topo. -->
    <?php echo $__env->make('site.layouts._partials.topo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Aqui depende da view que for chamada para se tornar mais flexível. -->
    <?php echo $__env->yieldContent('conteudo'); ?>
</body>
</html><?php /**PATH D:\Aplicativos\XAMPP\htdocs\laravel\app_super_gestao\resources\views/site/layouts/basico.blade.php ENDPATH**/ ?>