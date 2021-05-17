<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin.articles.index' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminArticlesController::index'], [], [['text', '/admin']], [], []],
    'admin.article.new' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminArticlesController::new'], [], [['text', '/admin/article/create']], [], []],
    'admin.article.edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminArticlesController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], []],
    'admin.article.delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminArticlesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], []],
    'articles' => [[], ['_controller' => 'App\\Controller\\ArticlesController::index'], [], [['text', '/articles']], [], []],
    'article.show' => [['slug', 'id'], ['_controller' => 'App\\Controller\\ArticlesController::show'], ['slug' => '[a-z0-9\\-]*'], [['variable', '-', '[^/]++', 'id', true], ['variable', '/', '[a-z0-9\\-]*', 'slug', true], ['text', '/articles']], [], []],
    'cart_index' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/panier']], [], []],
    'cart_add' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/add']], [], []],
    'cart_less' => [['id'], ['_controller' => 'App\\Controller\\CartController::less'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/less']], [], []],
    'cart_remove' => [['id'], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/remove']], [], []],
    'save_order' => [[], ['_controller' => 'App\\Controller\\CartController::saveOrder'], [], [['text', '/panier/save']], [], []],
    'category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category']], [], []],
    'category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/admin/category/new']], [], []],
    'category_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], []],
    'category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], []],
    'blog' => [[], ['_controller' => 'App\\Controller\\HomeController::blog'], [], [['text', '/blog']], [], []],
    'orders' => [[], ['_controller' => 'App\\Controller\\OrdersController::index'], [], [['text', '/orders']], [], []],
    'order_show' => [['id'], ['_controller' => 'App\\Controller\\OrdersController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/orders']], [], []],
    'order_add' => [[], ['_controller' => 'App\\Controller\\OrdersController::add'], [], [['text', '/orders/add']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user']], [], []],
    'user_edit' => [[], ['_controller' => 'App\\Controller\\UserController::editProfile'], [], [['text', '/user/edit']], [], []],
    'user_edit_mdp' => [[], ['_controller' => 'App\\Controller\\UserController::editMdp'], [], [['text', '/user/editmdp']], [], []],
    'liip_imagine_filter_runtime' => [['filter', 'hash', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[^/]++', 'hash', true], ['text', '/rc'], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
    'liip_imagine_filter' => [['filter', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'logout' => [[], [], [], [['text', '/logout']], [], []],
];
