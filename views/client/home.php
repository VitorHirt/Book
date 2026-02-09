<?php use Framework\View\View; ?>

<?php View::start('title'); ?> <?= $titulo ?> <?php View::end(); ?>

<?php View::push('css', ''); ?>

<?php View::start('content'); ?>
     <?php partial('client/partials/banner'); ?>
<?php View::end(); ?>

<?php View::push('js', ''); ?>