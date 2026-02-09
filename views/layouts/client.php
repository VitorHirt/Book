<?php use Framework\View\View; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>
            <?php View::yield('title', 'Meu Sistema 2026'); ?>
        </title>

        <!-- Custom.css -->
        <link rel="stylesheet" href="<?= asset('assets/custom/custom.css') ?>" />
        <script src="<?= asset('assets/custom/custom.js') ?>"></script>

        <!-- Bootstrap Css/Js -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

        <!-- Swipper -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    </head>

    <body>
        <?php partial('layouts/partials/sidebar/sidebar'); ?>

        <div>
            <?php View::yield('content'); ?>
        </div>

        <footer class="footer">
            <p>&copy; 2026 - Desenvolvido com PHP Puro</p>
        </footer>
    </body>
</html>