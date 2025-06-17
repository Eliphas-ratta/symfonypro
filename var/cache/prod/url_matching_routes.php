<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/world' => [[['_route' => 'app_world', '_controller' => 'App\\Controller\\WorldController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/world/([^/]++)(?'
                    .'|/(?'
                        .'|c(?'
                            .'|apacit(?'
                                .'|ies(*:45)'
                                .'|y/create(*:60)'
                            .')'
                            .'|ontinent(?'
                                .'|s(*:80)'
                                .'|/create(*:94)'
                            .')'
                        .')'
                        .'|domain(?'
                            .'|s(*:113)'
                            .'|/create(*:128)'
                        .')'
                        .'|faction(?'
                            .'|s(*:148)'
                            .'|/create(*:163)'
                        .')'
                        .'|guild(?'
                            .'|s(*:181)'
                            .'|/create(*:196)'
                        .')'
                        .'|race(?'
                            .'|s(*:213)'
                            .'|/create(*:228)'
                        .')'
                    .')'
                    .'|(*:238)'
                .')'
                .'|/c(?'
                    .'|apacity/(?'
                        .'|edit/([^/]++)(*:276)'
                        .'|delete/([^/]++)(*:299)'
                        .'|show/([^/]++)(*:320)'
                    .')'
                    .'|ity/(?'
                        .'|([^/]++)(*:344)'
                        .'|create/([^/]++)(*:367)'
                        .'|edit/([^/]++)(*:388)'
                        .'|delete/([^/]++)(*:411)'
                        .'|show/([^/]++)(*:432)'
                    .')'
                    .'|ontinent/([^/]++)(?'
                        .'|(*:461)'
                        .'|/(?'
                            .'|edit(*:477)'
                            .'|delete(*:491)'
                        .')'
                    .')'
                .')'
                .'|/domain/(?'
                    .'|edit/([^/]++)(*:526)'
                    .'|delete/([^/]++)(*:549)'
                    .'|show/([^/]++)(*:570)'
                .')'
                .'|/faction/(?'
                    .'|edit/([^/]++)(*:604)'
                    .'|delete/([^/]++)(*:627)'
                    .'|show/([^/]++)(*:648)'
                .')'
                .'|/guild/(?'
                    .'|edit/([^/]++)(*:680)'
                    .'|delete/([^/]++)(*:703)'
                    .'|show/([^/]++)(*:724)'
                .')'
                .'|/hero/(?'
                    .'|([^/]++)(*:750)'
                    .'|create/([^/]++)(*:773)'
                    .'|edit/([^/]++)(*:794)'
                    .'|delete/([^/]++)(*:817)'
                    .'|show/([^/]++)(*:838)'
                .')'
                .'|/race/(?'
                    .'|show/([^/]++)(*:869)'
                    .'|edit/([^/]++)(*:890)'
                    .'|delete/([^/]++)(*:913)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        45 => [[['_route' => 'app_capacities', '_controller' => 'App\\Controller\\CapacityController::index'], ['worldId'], null, null, false, false, null]],
        60 => [[['_route' => 'app_capacity_create', '_controller' => 'App\\Controller\\CapacityController::create'], ['worldId'], null, null, false, false, null]],
        80 => [[['_route' => 'app_continents', '_controller' => 'App\\Controller\\ContinentController::index'], ['worldId'], null, null, false, false, null]],
        94 => [[['_route' => 'app_continent_create', '_controller' => 'App\\Controller\\ContinentController::create'], ['worldId'], null, null, false, false, null]],
        113 => [[['_route' => 'app_domains', '_controller' => 'App\\Controller\\DomainController::index'], ['worldId'], null, null, false, false, null]],
        128 => [[['_route' => 'app_domain_create', '_controller' => 'App\\Controller\\DomainController::create'], ['worldId'], null, null, false, false, null]],
        148 => [[['_route' => 'app_factions', '_controller' => 'App\\Controller\\FactionController::index'], ['worldId'], null, null, false, false, null]],
        163 => [[['_route' => 'app_faction_create', '_controller' => 'App\\Controller\\FactionController::create'], ['worldId'], null, null, false, false, null]],
        181 => [[['_route' => 'app_guilds', '_controller' => 'App\\Controller\\GuildController::index'], ['worldId'], null, null, false, false, null]],
        196 => [[['_route' => 'app_guild_create', '_controller' => 'App\\Controller\\GuildController::create'], ['worldId'], null, null, false, false, null]],
        213 => [[['_route' => 'app_races', '_controller' => 'App\\Controller\\RaceController::index'], ['worldId'], null, null, false, false, null]],
        228 => [[['_route' => 'app_race_create', '_controller' => 'App\\Controller\\RaceController::create'], ['worldId'], null, null, false, false, null]],
        238 => [[['_route' => 'app_world_show', '_controller' => 'App\\Controller\\WorldController::show'], ['id'], null, null, false, true, null]],
        276 => [[['_route' => 'app_capacity_edit', '_controller' => 'App\\Controller\\CapacityController::edit'], ['id'], null, null, false, true, null]],
        299 => [[['_route' => 'app_capacity_delete', '_controller' => 'App\\Controller\\CapacityController::delete'], ['id'], null, null, false, true, null]],
        320 => [[['_route' => 'app_capacity_show', '_controller' => 'App\\Controller\\CapacityController::show'], ['id'], null, null, false, true, null]],
        344 => [[['_route' => 'app_city', '_controller' => 'App\\Controller\\CityController::index'], ['worldId'], null, null, false, true, null]],
        367 => [[['_route' => 'app_city_create', '_controller' => 'App\\Controller\\CityController::create'], ['worldId'], null, null, false, true, null]],
        388 => [[['_route' => 'app_city_edit', '_controller' => 'App\\Controller\\CityController::edit'], ['id'], null, null, false, true, null]],
        411 => [[['_route' => 'app_city_delete', '_controller' => 'App\\Controller\\CityController::delete'], ['id'], null, null, false, true, null]],
        432 => [[['_route' => 'app_city_show', '_controller' => 'App\\Controller\\CityController::show'], ['id'], null, null, false, true, null]],
        461 => [[['_route' => 'app_continent_show', '_controller' => 'App\\Controller\\ContinentController::show'], ['id'], null, null, false, true, null]],
        477 => [[['_route' => 'app_continent_edit', '_controller' => 'App\\Controller\\ContinentController::edit'], ['id'], null, null, false, false, null]],
        491 => [[['_route' => 'app_continent_delete', '_controller' => 'App\\Controller\\ContinentController::delete'], ['id'], null, null, false, false, null]],
        526 => [[['_route' => 'app_domain_edit', '_controller' => 'App\\Controller\\DomainController::edit'], ['id'], null, null, false, true, null]],
        549 => [[['_route' => 'app_domain_delete', '_controller' => 'App\\Controller\\DomainController::delete'], ['id'], null, null, false, true, null]],
        570 => [[['_route' => 'app_domain_show', '_controller' => 'App\\Controller\\DomainController::show'], ['id'], null, null, false, true, null]],
        604 => [[['_route' => 'app_faction_edit', '_controller' => 'App\\Controller\\FactionController::edit'], ['id'], null, null, false, true, null]],
        627 => [[['_route' => 'app_faction_delete', '_controller' => 'App\\Controller\\FactionController::delete'], ['id'], null, null, false, true, null]],
        648 => [[['_route' => 'app_faction_show', '_controller' => 'App\\Controller\\FactionController::show'], ['id'], null, null, false, true, null]],
        680 => [[['_route' => 'app_guild_edit', '_controller' => 'App\\Controller\\GuildController::edit'], ['id'], null, null, false, true, null]],
        703 => [[['_route' => 'app_guild_delete', '_controller' => 'App\\Controller\\GuildController::delete'], ['id'], null, null, false, true, null]],
        724 => [[['_route' => 'app_guild_show', '_controller' => 'App\\Controller\\GuildController::show'], ['id'], null, null, false, true, null]],
        750 => [[['_route' => 'app_hero', '_controller' => 'App\\Controller\\HeroController::index'], ['worldId'], null, null, false, true, null]],
        773 => [[['_route' => 'app_hero_create', '_controller' => 'App\\Controller\\HeroController::create'], ['worldId'], null, null, false, true, null]],
        794 => [[['_route' => 'app_hero_edit', '_controller' => 'App\\Controller\\HeroController::edit'], ['id'], null, null, false, true, null]],
        817 => [[['_route' => 'app_hero_delete', '_controller' => 'App\\Controller\\HeroController::delete'], ['id'], null, null, false, true, null]],
        838 => [[['_route' => 'app_hero_show', '_controller' => 'App\\Controller\\HeroController::show'], ['id'], null, null, false, true, null]],
        869 => [[['_route' => 'app_race_show', '_controller' => 'App\\Controller\\RaceController::show'], ['id'], null, null, false, true, null]],
        890 => [[['_route' => 'app_race_edit', '_controller' => 'App\\Controller\\RaceController::edit'], ['id'], null, null, false, true, null]],
        913 => [
            [['_route' => 'app_race_delete', '_controller' => 'App\\Controller\\RaceController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
