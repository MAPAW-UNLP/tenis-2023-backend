<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/alquiler' => [[['_route' => 'app_alquileres', '_controller' => 'App\\Controller\\AlquilerController::getAlquileres'], null, ['GET' => 0], null, false, false, null]],
        '/api/canchas' => [
            [['_route' => 'app_canchas', '_controller' => 'App\\Controller\\CanchaController::getCanchas'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'mod_canchas', '_controller' => 'App\\Controller\\CanchaController::modCancha'], null, ['PUT' => 0], null, false, false, null],
        ],
        '/api/cancha' => [[['_route' => 'add_canchas', '_controller' => 'App\\Controller\\CanchaController::addCancha'], null, ['POST' => 0], null, false, false, null]],
        '/api/clases' => [[['_route' => 'app_clases', '_controller' => 'App\\Controller\\ClasesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/grupos' => [[['_route' => 'app_Grupos', '_controller' => 'App\\Controller\\GrupoController::getGrupos'], null, ['GET' => 0], null, false, false, null]],
        '/api/pagos' => [
            [['_route' => 'get_pagos', '_controller' => 'App\\Controller\\PagosController::getPagos'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add_pagos', '_controller' => 'App\\Controller\\PagosController::addPagos'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/pagos_por_persona' => [[['_route' => 'app_Pagos_personaId', '_controller' => 'App\\Controller\\PagosController::getPagosByPersonaId'], null, ['GET' => 0], null, false, false, null]],
        '/api/persona' => [
            [['_route' => 'app_personas', '_controller' => 'App\\Controller\\PersonaController::getPersona'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_alta_persona', '_controller' => 'App\\Controller\\PersonaController::addPersona'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_mod_persona', '_controller' => 'App\\Controller\\PersonaController::modPersona'], null, ['PUT' => 0], null, false, false, null],
        ],
        '/api/alumnos' => [[['_route' => 'app_alumnos', '_controller' => 'App\\Controller\\PersonaController::getAlumnos'], null, ['GET' => 0], null, false, false, null]],
        '/api/profesores' => [[['_route' => 'app_profesores', '_controller' => 'App\\Controller\\PersonaController::getProfesores'], null, ['GET' => 0], null, false, false, null]],
        '/api/reservas' => [[['_route' => 'app_reservas', '_controller' => 'App\\Controller\\ReservaController::getReservas'], null, ['GET' => 0], null, false, false, null]],
        '/api/reservas_por_canchas_por_fecha' => [[['_route' => 'app_reservas_por_canchas_por_fecha', '_controller' => 'App\\Controller\\ReservaController::getReservasPorCanchasPorFecha'], null, ['GET' => 0], null, false, false, null]],
        '/api/reserva' => [[['_route' => 'app_alta_reserva', '_controller' => 'App\\Controller\\ReservaController::postReserva'], null, ['POST' => 0], null, false, false, null]],
        '/api/profe_reserva' => [[['_route' => 'mod_profe_reserva', '_controller' => 'App\\Controller\\ReservaController::modProfeReserva'], null, ['PUT' => 0], null, false, false, null]],
        '/api/grupo_reserva' => [[['_route' => 'mod_grupo_reserva', '_controller' => 'App\\Controller\\ReservaController::modGrupoReserva'], null, ['PUT' => 0], null, false, false, null]],
        '/api/clase_reserva' => [[['_route' => 'mod_clase_reserva', '_controller' => 'App\\Controller\\ReservaController::modClaseReserva'], null, ['PUT' => 0], null, false, false, null]],
        '/api/liquidar_reservas' => [[['_route' => 'app_liquidar_reservas', '_controller' => 'App\\Controller\\ReservaController::liquidarReservas'], null, ['POST' => 0], null, false, false, null]],
        '/api/reservas_test' => [[['_route' => 'app_reservas_test', '_controller' => 'App\\Controller\\ReservaController::getReservasTest'], null, ['GET' => 0], null, false, false, null]],
        '/api/usuarios' => [[['_route' => 'app_usuarios', '_controller' => 'App\\Controller\\UsuarioController::getUsuarios'], null, ['GET' => 0], null, false, false, null]],
        '/api/usuario' => [[['_route' => 'check_login', '_controller' => 'App\\Controller\\UsuarioController::checkLogin'], null, ['POST' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
