

<?php $__env->startSection('titulo', 'Produtos'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Nossos Produtos</h1>
        </div>

        <div class="informacao-pagina">
            <div class="produtos">
                <ul>
                    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <h2><?php echo e($produto['nome']); ?></h2>
                            <p><strong>Descrição:</strong> <?php echo e($produto['descricao']); ?></p>
                            <p><strong>Preço:</strong> R$ <?php echo e(number_format($produto['preco'], 2, ',', '.')); ?></p>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="<?php echo e(asset('img/facebook.png')); ?>">
            <img src="<?php echo e(asset('img/linkedin.png')); ?>">
            <img src="<?php echo e(asset('img/youtube.png')); ?>">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="<?php echo e(asset('img/mapa.png')); ?>">
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layouts.basico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplicativos\XAMPP\htdocs\laravel\app_super_gestao\resources\views/site/produto.blade.php ENDPATH**/ ?>