<?php use Framework\View\View; ?>

<?php View::start('title'); ?> <?= $titulo ?> <?php View::end(); ?>

<?php View::push('css', ''); ?>

<?php View::start('content'); ?>
    <div class="hero">
        <h1><?= $titulo ?></h1>
        <p><?= $descricao ?></p>
    </div>
<?php View::end(); ?>

<?php View::push('js', ''); ?>