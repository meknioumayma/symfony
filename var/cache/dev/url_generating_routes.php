<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_produit_add' => [[], ['_controller' => 'App\\Controller\\ProduitAddController::index'], [], [['text', '/produit/add']], [], [], []],
    'app_produit_dashboard' => [[], ['_controller' => 'App\\Controller\\ProduitDashboardController::index'], [], [['text', '/produit/dashboard']], [], [], []],
    'app_produit_list' => [[], ['_controller' => 'App\\Controller\\ProduitListController::index'], [], [['text', '/produit/list']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\YController::login'], [], [['text', '/login']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/register']], [], [], []],
    'produit_dashboard' => [[], ['_controller' => 'App\\Controller\\ProduitDashboardController::index'], [], [['text', '/produit/dashboard']], [], [], []],
    'produit_add' => [[], ['_controller' => 'App\\Controller\\ProduitAddController::index'], [], [['text', '/produit/add']], [], [], []],
    'produit_list' => [[], ['_controller' => 'App\\Controller\\ProduitListController::index'], [], [['text', '/produit/list']], [], [], []],
];
