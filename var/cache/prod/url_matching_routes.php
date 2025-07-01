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
        '/legal-notice' => [[['_route' => 'app_legal', '_controller' => 'App\\Controller\\StaticPageController::legal'], null, null, null, false, false, null]],
        '/privacy-policy' => [[['_route' => 'app_privacy', '_controller' => 'App\\Controller\\StaticPageController::privacy'], null, null, null, false, false, null]],
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
                        .'|d(?'
                            .'|omain(?'
                                .'|s(*:116)'
                                .'|/create(*:131)'
                            .')'
                            .'|elete(*:145)'
                        .')'
                        .'|faction(?'
                            .'|s(*:165)'
                            .'|/create(*:180)'
                        .')'
                        .'|guild(?'
                            .'|s(*:198)'
                            .'|/create(*:213)'
                        .')'
                        .'|race(?'
                            .'|s(*:230)'
                            .'|/create(*:245)'
                        .')'
                        .'|edit(*:258)'
                    .')'
                    .'|(*:267)'
                .')'
                .'|/c(?'
                    .'|apacity/(?'
                        .'|edit/([^/]++)(*:305)'
                        .'|delete/([^/]++)(*:328)'
                        .'|show/([^/]++)(*:349)'
                    .')'
                    .'|ity/(?'
                        .'|([^/]++)(*:373)'
                        .'|create/([^/]++)(*:396)'
                        .'|edit/([^/]++)(*:417)'
                        .'|delete/([^/]++)(*:440)'
                        .'|show/([^/]++)(*:461)'
                    .')'
                    .'|ontinent/([^/]++)(?'
                        .'|(*:490)'
                        .'|/(?'
                            .'|edit(*:506)'
                            .'|delete(*:520)'
                        .')'
                    .')'
                .')'
                .'|/domain/(?'
                    .'|edit/([^/]++)(*:555)'
                    .'|delete/([^/]++)(*:578)'
                    .'|show/([^/]++)(*:599)'
                .')'
                .'|/faction/(?'
                    .'|edit/([^/]++)(*:633)'
                    .'|delete/([^/]++)(*:656)'
                    .'|show/([^/]++)(*:677)'
                .')'
                .'|/guild/(?'
                    .'|edit/([^/]++)(*:709)'
                    .'|delete/([^/]++)(*:732)'
                    .'|show/([^/]++)(*:753)'
                .')'
                .'|/hero/(?'
                    .'|([^/]++)(*:779)'
                    .'|create/([^/]++)(*:802)'
                    .'|edit/([^/]++)(*:823)'
                    .'|delete/([^/]++)(*:846)'
                    .'|show/([^/]++)(*:867)'
                .')'
                .'|/race/(?'
                    .'|show/([^/]++)(*:898)'
                    .'|edit/([^/]++)(*:919)'
                    .'|delete/([^/]++)(*:942)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        45 => [[['_route' => 'app_capacities', '_controller' => 'App\\Controller\\CapacityController::index'], ['worldId'], null, null, false, false, null]],
        60 => [[['_route' => 'app_capacity_create', '_controller' => 'App\\Controller\\CapacityController::create'], ['worldId'], null, null, false, false, null]],
        80 => [[['_route' => 'app_continents', '_controller' => 'App\\Controller\\ContinentController::index'], ['worldId'], null, null, false, false, null]],
        94 => [[['_route' => 'app_continent_create', '_controller' => 'App\\Controller\\ContinentController::create'], ['worldId'], null, null, false, false, null]],
        116 => [[['_route' => 'app_domains', '_controller' => 'App\\Controller\\DomainController::index'], ['worldId'], null, null, false, false, null]],
        131 => [[['_route' => 'app_domain_create', '_controller' => 'App\\Controller\\DomainController::create'], ['worldId'], null, null, false, false, null]],
        145 => [[['_route' => 'app_world_delete', '_controller' => 'App\\Controller\\WorldController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        165 => [[['_route' => 'app_factions', '_controller' => 'App\\Controller\\FactionController::index'], ['worldId'], null, null, false, false, null]],
        180 => [[['_route' => 'app_faction_create', '_controller' => 'App\\Controller\\FactionController::create'], ['worldId'], null, null, false, false, null]],
        198 => [[['_route' => 'app_guilds', '_controller' => 'App\\Controller\\GuildController::index'], ['worldId'], null, null, false, false, null]],
        213 => [[['_route' => 'app_guild_create', '_controller' => 'App\\Controller\\GuildController::create'], ['worldId'], null, null, false, false, null]],
        230 => [[['_route' => 'app_races', '_controller' => 'App\\Controller\\RaceController::index'], ['worldId'], null, null, false, false, null]],
        245 => [[['_route' => 'app_race_create', '_controller' => 'App\\Controller\\RaceController::create'], ['worldId'], null, null, false, false, null]],
        258 => [[['_route' => 'app_world_edit', '_controller' => 'App\\Controller\\WorldController::edit'], ['id'], null, null, false, false, null]],
        267 => [[['_route' => 'app_world_show', '_controller' => 'App\\Controller\\WorldController::show'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'app_capacity_edit', '_controller' => 'App\\Controller\\CapacityController::edit'], ['id'], null, null, false, true, null]],
        328 => [[['_route' => 'app_capacity_delete', '_controller' => 'App\\Controller\\CapacityController::delete'], ['id'], null, null, false, true, null]],
        349 => [[['_route' => 'app_capacity_show', '_controller' => 'App\\Controller\\CapacityController::show'], ['id'], null, null, false, true, null]],
        373 => [[['_route' => 'app_city', '_controller' => 'App\\Controller\\CityController::index'], ['worldId'], null, null, false, true, null]],
        396 => [[['_route' => 'app_city_create', '_controller' => 'App\\Controller\\CityController::create'], ['worldId'], null, null, false, true, null]],
        417 => [[['_route' => 'app_city_edit', '_controller' => 'App\\Controller\\CityController::edit'], ['id'], null, null, false, true, null]],
        440 => [[['_route' => 'app_city_delete', '_controller' => 'App\\Controller\\CityController::delete'], ['id'], null, null, false, true, null]],
        461 => [[['_route' => 'app_city_show', '_controller' => 'App\\Controller\\CityController::show'], ['id'], null, null, false, true, null]],
        490 => [[['_route' => 'app_continent_show', '_controller' => 'App\\Controller\\ContinentController::show'], ['id'], null, null, false, true, null]],
        506 => [[['_route' => 'app_continent_edit', '_controller' => 'App\\Controller\\ContinentController::edit'], ['id'], null, null, false, false, null]],
        520 => [[['_route' => 'app_continent_delete', '_controller' => 'App\\Controller\\ContinentController::delete'], ['id'], null, null, false, false, null]],
        555 => [[['_route' => 'app_domain_edit', '_controller' => 'App\\Controller\\DomainController::edit'], ['id'], null, null, false, true, null]],
        578 => [[['_route' => 'app_domain_delete', '_controller' => 'App\\Controller\\DomainController::delete'], ['id'], null, null, false, true, null]],
        599 => [[['_route' => 'app_domain_show', '_controller' => 'App\\Controller\\DomainController::show'], ['id'], null, null, false, true, null]],
        633 => [[['_route' => 'app_faction_edit', '_controller' => 'App\\Controller\\FactionController::edit'], ['id'], null, null, false, true, null]],
        656 => [[['_route' => 'app_faction_delete', '_controller' => 'App\\Controller\\FactionController::delete'], ['id'], null, null, false, true, null]],
        677 => [[['_route' => 'app_faction_show', '_controller' => 'App\\Controller\\FactionController::show'], ['id'], null, null, false, true, null]],
        709 => [[['_route' => 'app_guild_edit', '_controller' => 'App\\Controller\\GuildController::edit'], ['id'], null, null, false, true, null]],
        732 => [[['_route' => 'app_guild_delete', '_controller' => 'App\\Controller\\GuildController::delete'], ['id'], null, null, false, true, null]],
        753 => [[['_route' => 'app_guild_show', '_controller' => 'App\\Controller\\GuildController::show'], ['id'], null, null, false, true, null]],
        779 => [[['_route' => 'app_hero', '_controller' => 'App\\Controller\\HeroController::index'], ['worldId'], null, null, false, true, null]],
        802 => [[['_route' => 'app_hero_create', '_controller' => 'App\\Controller\\HeroController::create'], ['worldId'], null, null, false, true, null]],
        823 => [[['_route' => 'app_hero_edit', '_controller' => 'App\\Controller\\HeroController::edit'], ['id'], null, null, false, true, null]],
        846 => [[['_route' => 'app_hero_delete', '_controller' => 'App\\Controller\\HeroController::delete'], ['id'], null, null, false, true, null]],
        867 => [[['_route' => 'app_hero_show', '_controller' => 'App\\Controller\\HeroController::show'], ['id'], null, null, false, true, null]],
        898 => [[['_route' => 'app_race_show', '_controller' => 'App\\Controller\\RaceController::show'], ['id'], null, null, false, true, null]],
        919 => [[['_route' => 'app_race_edit', '_controller' => 'App\\Controller\\RaceController::edit'], ['id'], null, null, false, true, null]],
        942 => [
            [['_route' => 'app_race_delete', '_controller' => 'App\\Controller\\RaceController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
