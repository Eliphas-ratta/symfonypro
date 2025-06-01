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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/world' => [[['_route' => 'app_world', '_controller' => 'App\\Controller\\WorldController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/world/([^/]++)(?'
                    .'|/(?'
                        .'|c(?'
                            .'|apacit(?'
                                .'|ies(*:240)'
                                .'|y/create(*:256)'
                            .')'
                            .'|ontinent(?'
                                .'|s(*:277)'
                                .'|/create(*:292)'
                            .')'
                        .')'
                        .'|domain(?'
                            .'|s(*:312)'
                            .'|/create(*:327)'
                        .')'
                        .'|faction(?'
                            .'|s(*:347)'
                            .'|/create(*:362)'
                        .')'
                        .'|guild(?'
                            .'|s(*:380)'
                            .'|/create(*:395)'
                        .')'
                        .'|race(?'
                            .'|s(*:412)'
                            .'|/create(*:427)'
                        .')'
                    .')'
                    .'|(*:437)'
                .')'
                .'|/c(?'
                    .'|apacity/(?'
                        .'|edit/([^/]++)(*:475)'
                        .'|delete/([^/]++)(*:498)'
                        .'|show/([^/]++)(*:519)'
                    .')'
                    .'|ity/(?'
                        .'|([^/]++)(*:543)'
                        .'|create/([^/]++)(*:566)'
                        .'|edit/([^/]++)(*:587)'
                        .'|delete/([^/]++)(*:610)'
                        .'|show/([^/]++)(*:631)'
                    .')'
                    .'|ontinent/([^/]++)(?'
                        .'|(*:660)'
                        .'|/(?'
                            .'|edit(*:676)'
                            .'|delete(*:690)'
                        .')'
                    .')'
                .')'
                .'|/domain/(?'
                    .'|edit/([^/]++)(*:725)'
                    .'|delete/([^/]++)(*:748)'
                    .'|show/([^/]++)(*:769)'
                .')'
                .'|/faction/(?'
                    .'|edit/([^/]++)(*:803)'
                    .'|delete/([^/]++)(*:826)'
                    .'|show/([^/]++)(*:847)'
                .')'
                .'|/guild/(?'
                    .'|edit/([^/]++)(*:879)'
                    .'|delete/([^/]++)(*:902)'
                    .'|show/([^/]++)(*:923)'
                .')'
                .'|/hero/(?'
                    .'|([^/]++)(*:949)'
                    .'|create/([^/]++)(*:972)'
                    .'|edit/([^/]++)(*:993)'
                    .'|delete/([^/]++)(*:1016)'
                    .'|show/([^/]++)(*:1038)'
                .')'
                .'|/race/(?'
                    .'|show/([^/]++)(*:1070)'
                    .'|edit/([^/]++)(*:1092)'
                    .'|delete/([^/]++)(*:1116)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        240 => [[['_route' => 'app_capacities', '_controller' => 'App\\Controller\\CapacityController::index'], ['worldId'], null, null, false, false, null]],
        256 => [[['_route' => 'app_capacity_create', '_controller' => 'App\\Controller\\CapacityController::create'], ['worldId'], null, null, false, false, null]],
        277 => [[['_route' => 'app_continents', '_controller' => 'App\\Controller\\ContinentController::index'], ['worldId'], null, null, false, false, null]],
        292 => [[['_route' => 'app_continent_create', '_controller' => 'App\\Controller\\ContinentController::create'], ['worldId'], null, null, false, false, null]],
        312 => [[['_route' => 'app_domains', '_controller' => 'App\\Controller\\DomainController::index'], ['worldId'], null, null, false, false, null]],
        327 => [[['_route' => 'app_domain_create', '_controller' => 'App\\Controller\\DomainController::create'], ['worldId'], null, null, false, false, null]],
        347 => [[['_route' => 'app_factions', '_controller' => 'App\\Controller\\FactionController::index'], ['worldId'], null, null, false, false, null]],
        362 => [[['_route' => 'app_faction_create', '_controller' => 'App\\Controller\\FactionController::create'], ['worldId'], null, null, false, false, null]],
        380 => [[['_route' => 'app_guilds', '_controller' => 'App\\Controller\\GuildController::index'], ['worldId'], null, null, false, false, null]],
        395 => [[['_route' => 'app_guild_create', '_controller' => 'App\\Controller\\GuildController::create'], ['worldId'], null, null, false, false, null]],
        412 => [[['_route' => 'app_races', '_controller' => 'App\\Controller\\RaceController::index'], ['worldId'], null, null, false, false, null]],
        427 => [[['_route' => 'app_race_create', '_controller' => 'App\\Controller\\RaceController::create'], ['worldId'], null, null, false, false, null]],
        437 => [[['_route' => 'app_world_show', '_controller' => 'App\\Controller\\WorldController::show'], ['id'], null, null, false, true, null]],
        475 => [[['_route' => 'app_capacity_edit', '_controller' => 'App\\Controller\\CapacityController::edit'], ['id'], null, null, false, true, null]],
        498 => [[['_route' => 'app_capacity_delete', '_controller' => 'App\\Controller\\CapacityController::delete'], ['id'], null, null, false, true, null]],
        519 => [[['_route' => 'app_capacity_show', '_controller' => 'App\\Controller\\CapacityController::show'], ['id'], null, null, false, true, null]],
        543 => [[['_route' => 'app_city', '_controller' => 'App\\Controller\\CityController::index'], ['worldId'], null, null, false, true, null]],
        566 => [[['_route' => 'app_city_create', '_controller' => 'App\\Controller\\CityController::create'], ['worldId'], null, null, false, true, null]],
        587 => [[['_route' => 'app_city_edit', '_controller' => 'App\\Controller\\CityController::edit'], ['id'], null, null, false, true, null]],
        610 => [[['_route' => 'app_city_delete', '_controller' => 'App\\Controller\\CityController::delete'], ['id'], null, null, false, true, null]],
        631 => [[['_route' => 'app_city_show', '_controller' => 'App\\Controller\\CityController::show'], ['id'], null, null, false, true, null]],
        660 => [[['_route' => 'app_continent_show', '_controller' => 'App\\Controller\\ContinentController::show'], ['id'], null, null, false, true, null]],
        676 => [[['_route' => 'app_continent_edit', '_controller' => 'App\\Controller\\ContinentController::edit'], ['id'], null, null, false, false, null]],
        690 => [[['_route' => 'app_continent_delete', '_controller' => 'App\\Controller\\ContinentController::delete'], ['id'], null, null, false, false, null]],
        725 => [[['_route' => 'app_domain_edit', '_controller' => 'App\\Controller\\DomainController::edit'], ['id'], null, null, false, true, null]],
        748 => [[['_route' => 'app_domain_delete', '_controller' => 'App\\Controller\\DomainController::delete'], ['id'], null, null, false, true, null]],
        769 => [[['_route' => 'app_domain_show', '_controller' => 'App\\Controller\\DomainController::show'], ['id'], null, null, false, true, null]],
        803 => [[['_route' => 'app_faction_edit', '_controller' => 'App\\Controller\\FactionController::edit'], ['id'], null, null, false, true, null]],
        826 => [[['_route' => 'app_faction_delete', '_controller' => 'App\\Controller\\FactionController::delete'], ['id'], null, null, false, true, null]],
        847 => [[['_route' => 'app_faction_show', '_controller' => 'App\\Controller\\FactionController::show'], ['id'], null, null, false, true, null]],
        879 => [[['_route' => 'app_guild_edit', '_controller' => 'App\\Controller\\GuildController::edit'], ['id'], null, null, false, true, null]],
        902 => [[['_route' => 'app_guild_delete', '_controller' => 'App\\Controller\\GuildController::delete'], ['id'], null, null, false, true, null]],
        923 => [[['_route' => 'app_guild_show', '_controller' => 'App\\Controller\\GuildController::show'], ['id'], null, null, false, true, null]],
        949 => [[['_route' => 'app_hero', '_controller' => 'App\\Controller\\HeroController::index'], ['worldId'], null, null, false, true, null]],
        972 => [[['_route' => 'app_hero_create', '_controller' => 'App\\Controller\\HeroController::create'], ['worldId'], null, null, false, true, null]],
        993 => [[['_route' => 'app_hero_edit', '_controller' => 'App\\Controller\\HeroController::edit'], ['id'], null, null, false, true, null]],
        1016 => [[['_route' => 'app_hero_delete', '_controller' => 'App\\Controller\\HeroController::delete'], ['id'], null, null, false, true, null]],
        1038 => [[['_route' => 'app_hero_show', '_controller' => 'App\\Controller\\HeroController::show'], ['id'], null, null, false, true, null]],
        1070 => [[['_route' => 'app_race_show', '_controller' => 'App\\Controller\\RaceController::show'], ['id'], null, null, false, true, null]],
        1092 => [[['_route' => 'app_race_edit', '_controller' => 'App\\Controller\\RaceController::edit'], ['id'], null, null, false, true, null]],
        1116 => [
            [['_route' => 'app_race_delete', '_controller' => 'App\\Controller\\RaceController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
