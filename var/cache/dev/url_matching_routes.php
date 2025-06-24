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
                        .'|d(?'
                            .'|omain(?'
                                .'|s(*:315)'
                                .'|/create(*:330)'
                            .')'
                            .'|elete(*:344)'
                        .')'
                        .'|faction(?'
                            .'|s(*:364)'
                            .'|/create(*:379)'
                        .')'
                        .'|guild(?'
                            .'|s(*:397)'
                            .'|/create(*:412)'
                        .')'
                        .'|race(?'
                            .'|s(*:429)'
                            .'|/create(*:444)'
                        .')'
                        .'|edit(*:457)'
                    .')'
                    .'|(*:466)'
                .')'
                .'|/c(?'
                    .'|apacity/(?'
                        .'|edit/([^/]++)(*:504)'
                        .'|delete/([^/]++)(*:527)'
                        .'|show/([^/]++)(*:548)'
                    .')'
                    .'|ity/(?'
                        .'|([^/]++)(*:572)'
                        .'|create/([^/]++)(*:595)'
                        .'|edit/([^/]++)(*:616)'
                        .'|delete/([^/]++)(*:639)'
                        .'|show/([^/]++)(*:660)'
                    .')'
                    .'|ontinent/([^/]++)(?'
                        .'|(*:689)'
                        .'|/(?'
                            .'|edit(*:705)'
                            .'|delete(*:719)'
                        .')'
                    .')'
                .')'
                .'|/domain/(?'
                    .'|edit/([^/]++)(*:754)'
                    .'|delete/([^/]++)(*:777)'
                    .'|show/([^/]++)(*:798)'
                .')'
                .'|/faction/(?'
                    .'|edit/([^/]++)(*:832)'
                    .'|delete/([^/]++)(*:855)'
                    .'|show/([^/]++)(*:876)'
                .')'
                .'|/guild/(?'
                    .'|edit/([^/]++)(*:908)'
                    .'|delete/([^/]++)(*:931)'
                    .'|show/([^/]++)(*:952)'
                .')'
                .'|/hero/(?'
                    .'|([^/]++)(*:978)'
                    .'|create/([^/]++)(*:1001)'
                    .'|edit/([^/]++)(*:1023)'
                    .'|delete/([^/]++)(*:1047)'
                    .'|show/([^/]++)(*:1069)'
                .')'
                .'|/race/(?'
                    .'|show/([^/]++)(*:1101)'
                    .'|edit/([^/]++)(*:1123)'
                    .'|delete/([^/]++)(*:1147)'
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
        315 => [[['_route' => 'app_domains', '_controller' => 'App\\Controller\\DomainController::index'], ['worldId'], null, null, false, false, null]],
        330 => [[['_route' => 'app_domain_create', '_controller' => 'App\\Controller\\DomainController::create'], ['worldId'], null, null, false, false, null]],
        344 => [[['_route' => 'app_world_delete', '_controller' => 'App\\Controller\\WorldController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        364 => [[['_route' => 'app_factions', '_controller' => 'App\\Controller\\FactionController::index'], ['worldId'], null, null, false, false, null]],
        379 => [[['_route' => 'app_faction_create', '_controller' => 'App\\Controller\\FactionController::create'], ['worldId'], null, null, false, false, null]],
        397 => [[['_route' => 'app_guilds', '_controller' => 'App\\Controller\\GuildController::index'], ['worldId'], null, null, false, false, null]],
        412 => [[['_route' => 'app_guild_create', '_controller' => 'App\\Controller\\GuildController::create'], ['worldId'], null, null, false, false, null]],
        429 => [[['_route' => 'app_races', '_controller' => 'App\\Controller\\RaceController::index'], ['worldId'], null, null, false, false, null]],
        444 => [[['_route' => 'app_race_create', '_controller' => 'App\\Controller\\RaceController::create'], ['worldId'], null, null, false, false, null]],
        457 => [[['_route' => 'app_world_edit', '_controller' => 'App\\Controller\\WorldController::edit'], ['id'], null, null, false, false, null]],
        466 => [[['_route' => 'app_world_show', '_controller' => 'App\\Controller\\WorldController::show'], ['id'], null, null, false, true, null]],
        504 => [[['_route' => 'app_capacity_edit', '_controller' => 'App\\Controller\\CapacityController::edit'], ['id'], null, null, false, true, null]],
        527 => [[['_route' => 'app_capacity_delete', '_controller' => 'App\\Controller\\CapacityController::delete'], ['id'], null, null, false, true, null]],
        548 => [[['_route' => 'app_capacity_show', '_controller' => 'App\\Controller\\CapacityController::show'], ['id'], null, null, false, true, null]],
        572 => [[['_route' => 'app_city', '_controller' => 'App\\Controller\\CityController::index'], ['worldId'], null, null, false, true, null]],
        595 => [[['_route' => 'app_city_create', '_controller' => 'App\\Controller\\CityController::create'], ['worldId'], null, null, false, true, null]],
        616 => [[['_route' => 'app_city_edit', '_controller' => 'App\\Controller\\CityController::edit'], ['id'], null, null, false, true, null]],
        639 => [[['_route' => 'app_city_delete', '_controller' => 'App\\Controller\\CityController::delete'], ['id'], null, null, false, true, null]],
        660 => [[['_route' => 'app_city_show', '_controller' => 'App\\Controller\\CityController::show'], ['id'], null, null, false, true, null]],
        689 => [[['_route' => 'app_continent_show', '_controller' => 'App\\Controller\\ContinentController::show'], ['id'], null, null, false, true, null]],
        705 => [[['_route' => 'app_continent_edit', '_controller' => 'App\\Controller\\ContinentController::edit'], ['id'], null, null, false, false, null]],
        719 => [[['_route' => 'app_continent_delete', '_controller' => 'App\\Controller\\ContinentController::delete'], ['id'], null, null, false, false, null]],
        754 => [[['_route' => 'app_domain_edit', '_controller' => 'App\\Controller\\DomainController::edit'], ['id'], null, null, false, true, null]],
        777 => [[['_route' => 'app_domain_delete', '_controller' => 'App\\Controller\\DomainController::delete'], ['id'], null, null, false, true, null]],
        798 => [[['_route' => 'app_domain_show', '_controller' => 'App\\Controller\\DomainController::show'], ['id'], null, null, false, true, null]],
        832 => [[['_route' => 'app_faction_edit', '_controller' => 'App\\Controller\\FactionController::edit'], ['id'], null, null, false, true, null]],
        855 => [[['_route' => 'app_faction_delete', '_controller' => 'App\\Controller\\FactionController::delete'], ['id'], null, null, false, true, null]],
        876 => [[['_route' => 'app_faction_show', '_controller' => 'App\\Controller\\FactionController::show'], ['id'], null, null, false, true, null]],
        908 => [[['_route' => 'app_guild_edit', '_controller' => 'App\\Controller\\GuildController::edit'], ['id'], null, null, false, true, null]],
        931 => [[['_route' => 'app_guild_delete', '_controller' => 'App\\Controller\\GuildController::delete'], ['id'], null, null, false, true, null]],
        952 => [[['_route' => 'app_guild_show', '_controller' => 'App\\Controller\\GuildController::show'], ['id'], null, null, false, true, null]],
        978 => [[['_route' => 'app_hero', '_controller' => 'App\\Controller\\HeroController::index'], ['worldId'], null, null, false, true, null]],
        1001 => [[['_route' => 'app_hero_create', '_controller' => 'App\\Controller\\HeroController::create'], ['worldId'], null, null, false, true, null]],
        1023 => [[['_route' => 'app_hero_edit', '_controller' => 'App\\Controller\\HeroController::edit'], ['id'], null, null, false, true, null]],
        1047 => [[['_route' => 'app_hero_delete', '_controller' => 'App\\Controller\\HeroController::delete'], ['id'], null, null, false, true, null]],
        1069 => [[['_route' => 'app_hero_show', '_controller' => 'App\\Controller\\HeroController::show'], ['id'], null, null, false, true, null]],
        1101 => [[['_route' => 'app_race_show', '_controller' => 'App\\Controller\\RaceController::show'], ['id'], null, null, false, true, null]],
        1123 => [[['_route' => 'app_race_edit', '_controller' => 'App\\Controller\\RaceController::edit'], ['id'], null, null, false, true, null]],
        1147 => [
            [['_route' => 'app_race_delete', '_controller' => 'App\\Controller\\RaceController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
