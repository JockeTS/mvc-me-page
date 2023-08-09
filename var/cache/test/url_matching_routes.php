<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api' => [[['_route' => 'api_start', '_controller' => 'App\\Controller\\ApiController::apiStart'], null, null, null, false, false, null]],
        '/api/quote' => [[['_route' => 'quote', '_controller' => 'App\\Controller\\ApiController::quote'], null, null, null, false, false, null]],
        '/api/deck' => [[['_route' => 'api_deck', '_controller' => 'App\\Controller\\ApiController::apiDeck'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'api_deck_shuffle', '_controller' => 'App\\Controller\\ApiController::apiDeckShuffle'], null, ['POST' => 0], null, false, false, null]],
        '/api/deck/draw' => [[['_route' => 'api_deck_draw_one', '_controller' => 'App\\Controller\\ApiController::apiDeckDrawOne'], null, ['POST' => 0], null, false, false, null]],
        '/api/deck/draw/number' => [[['_route' => 'api_deck_draw_many', '_controller' => 'App\\Controller\\ApiController::apiDeckDrawMany'], null, ['POST' => 0], null, false, false, null]],
        '/api/game' => [[['_route' => 'api_game', '_controller' => 'App\\Controller\\ApiController::apiGame'], null, ['GET' => 0], null, false, false, null]],
        '/api/library/books' => [[['_route' => 'api_books', '_controller' => 'App\\Controller\\ApiController::apiBooks'], null, ['GET' => 0], null, false, false, null]],
        '/card' => [[['_route' => 'card', '_controller' => 'App\\Controller\\CardController::start'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'deck', '_controller' => 'App\\Controller\\CardController::deck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'deck_shuffle', '_controller' => 'App\\Controller\\CardController::deckShuffle'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'draw_one', '_controller' => 'App\\Controller\\CardController::drawOne'], null, null, null, false, false, null]],
        '/game' => [[['_route' => 'game_start', '_controller' => 'App\\Controller\\GameController::gameStart'], null, null, null, false, false, null]],
        '/game/init' => [[['_route' => 'game_init', '_controller' => 'App\\Controller\\GameController::gameInit'], null, null, null, false, false, null]],
        '/game/main' => [[['_route' => 'game_main', '_controller' => 'App\\Controller\\GameController::gameMain'], null, null, null, false, false, null]],
        '/game/add' => [[['_route' => 'game_add_card', '_controller' => 'App\\Controller\\GameController::gameAddCard'], null, null, null, false, false, null]],
        '/game/stop' => [[['_route' => 'game_stop', '_controller' => 'App\\Controller\\GameController::gameStop'], null, null, null, false, false, null]],
        '/game/doc' => [[['_route' => 'game_doc', '_controller' => 'App\\Controller\\GameController::gameDoc'], null, null, null, false, false, null]],
        '/library' => [[['_route' => 'library_start', '_controller' => 'App\\Controller\\LibraryController::start'], null, null, null, false, false, null]],
        '/library/create' => [
            [['_route' => 'book_create', '_controller' => 'App\\Controller\\LibraryController::createBook'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'book_create_post', '_controller' => 'App\\Controller\\LibraryController::createBookPost'], null, ['POST' => 0], null, false, false, null],
        ],
        '/library/read' => [[['_route' => 'book_read_all', '_controller' => 'App\\Controller\\LibraryController::readAllBook'], null, null, null, false, false, null]],
        '/library/update' => [[['_route' => 'book_update_post', '_controller' => 'App\\Controller\\LibraryController::updateBookPost'], null, ['POST' => 0], null, false, false, null]],
        '/library/delete' => [[['_route' => 'book_delete_post', '_controller' => 'App\\Controller\\LibraryController::deleteBookPost'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\RootController::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\RootController::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\RootController::report'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\RootController::lucky'], null, null, null, false, false, null]],
        '/metrics' => [[['_route' => 'metrics', '_controller' => 'App\\Controller\\RootController::metrics'], null, null, null, false, false, null]],
        '/proj' => [[['_route' => 'viz_start', '_controller' => 'App\\Controller\\VizController::vizStart'], null, null, null, false, false, null]],
        '/proj/about' => [[['_route' => 'viz_about', '_controller' => 'App\\Controller\\VizController::vizAbout'], null, null, null, false, false, null]],
        '/proj/definitions' => [[['_route' => 'viz_def', '_controller' => 'App\\Controller\\VizController::vizDef'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/library/book/([^/]++)(*:33)'
                .'|/card/deck/draw/(\\d+)(*:61)'
                .'|/library/(?'
                    .'|read/([^/]++)(*:93)'
                    .'|update/([^/]++)(*:115)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'api_book', '_controller' => 'App\\Controller\\ApiController::apiBook'], ['isbn'], ['GET' => 0], null, false, true, null]],
        61 => [[['_route' => 'draw_many', '_controller' => 'App\\Controller\\CardController::drawMany'], ['num'], null, null, false, true, null]],
        93 => [[['_route' => 'book_by_id', '_controller' => 'App\\Controller\\LibraryController::readBookById'], ['id'], null, null, false, true, null]],
        115 => [
            [['_route' => 'book_update', '_controller' => 'App\\Controller\\LibraryController::updateBook'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
