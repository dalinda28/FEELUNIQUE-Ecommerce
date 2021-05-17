<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin.articles.index', '_controller' => 'App\\Controller\\Admin\\AdminArticlesController::index'], null, null, null, false, false, null]],
        '/admin/article/create' => [[['_route' => 'admin.article.new', '_controller' => 'App\\Controller\\Admin\\AdminArticlesController::new'], null, null, null, false, false, null]],
        '/articles' => [[['_route' => 'articles', '_controller' => 'App\\Controller\\ArticlesController::index'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/panier/save' => [[['_route' => 'save_order', '_controller' => 'App\\Controller\\CartController::saveOrder'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\HomeController::blog'], null, null, null, false, false, null]],
        '/orders' => [[['_route' => 'orders', '_controller' => 'App\\Controller\\OrdersController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/edit' => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::editProfile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/editmdp' => [[['_route' => 'user_edit_mdp', '_controller' => 'App\\Controller\\UserController::editMdp'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|article/([^/]++)(?'
                            .'|(*:201)'
                        .')'
                        .'|category/([^/]++)/edit(*:232)'
                    .')'
                    .'|rticles/([a-z0-9\\-]*)\\-([^/]++)(*:272)'
                .')'
                .'|/panier/(?'
                    .'|add/([^/]++)(*:304)'
                    .'|less/([^/]++)(*:325)'
                    .'|remove/([^/]++)(*:348)'
                .')'
                .'|/category/([^/]++)(*:375)'
                .'|/orders/(?'
                    .'|([^/]++)(*:402)'
                    .'|add(*:413)'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:476)'
                    .'|([A-z0-9_-]*)/(.+)(*:502)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        201 => [
            [['_route' => 'admin.article.edit', '_controller' => 'App\\Controller\\Admin\\AdminArticlesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'admin.article.delete', '_controller' => 'App\\Controller\\Admin\\AdminArticlesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        232 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        272 => [[['_route' => 'article.show', '_controller' => 'App\\Controller\\ArticlesController::show'], ['slug', 'id'], null, null, false, true, null]],
        304 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        325 => [[['_route' => 'cart_less', '_controller' => 'App\\Controller\\CartController::less'], ['id'], null, null, false, true, null]],
        348 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        375 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        402 => [[['_route' => 'order_show', '_controller' => 'App\\Controller\\OrdersController::show'], ['id'], null, null, false, true, null]],
        413 => [[['_route' => 'order_add', '_controller' => 'App\\Controller\\OrdersController::add'], [], null, null, false, false, null]],
        476 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        502 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
