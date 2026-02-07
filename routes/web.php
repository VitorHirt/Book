<?php

// O objeto $router vem lá do index.php
$router->get('/', [App\Controllers\Client\HomeController::class, 'index']);
