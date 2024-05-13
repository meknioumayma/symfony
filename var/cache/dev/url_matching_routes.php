<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/produit/add' => [
            [['_route' => 'app_produit_add', '_controller' => 'App\\Controller\\ProduitAddController::index'], null, null, null, false, false, null],
            [['_route' => 'produit_add', '_controller' => 'App\\Controller\\ProduitAddController::index'], null, null, null, false, false, null],
        ],
        '/produit/dashboard' => [
            [['_route' => 'app_produit_dashboard', '_controller' => 'App\\Controller\\ProduitDashboardController::index'], null, null, null, false, false, null],
            [['_route' => 'produit_dashboard', '_controller' => 'App\\Controller\\ProduitDashboardController::index'], null, null, null, false, false, null],
        ],
        '/produit/list' => [
            [['_route' => 'app_produit_list', '_controller' => 'App\\Controller\\ProduitListController::index'], null, null, null, false, false, null],
            [['_route' => 'produit_list', '_controller' => 'App\\Controller\\ProduitListController::index'], null, null, null, false, false, null],
        ],
        '/register' => [
            [['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null],
            [['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null],
        ],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\YController::login'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
