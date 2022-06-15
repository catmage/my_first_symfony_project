<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/inscription']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\VillageGreenController::home'], [], [['text', '/']], [], []],
    'inscription' => [[], ['_controller' => 'App\\Controller\\VillageGreenController::inscription'], [], [['text', '/inscription']], [], []],
    'produits' => [[], ['_controller' => 'App\\Controller\\VillageGreenController::produits'], [], [['text', '/produits']], [], []],
    'show' => [['id'], ['_controller' => 'App\\Controller\\VillageGreenController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/show']], [], []],
    'connecter' => [[], ['_controller' => 'App\\Controller\\VillageGreenController::connecter'], [], [['text', '/connecter']], [], []],
];
