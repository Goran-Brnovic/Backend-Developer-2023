<?php

use App\Controller\GenreController;
use App\Controller\MediaController;
use App\Controller\SiteController;
use Core\Router;

Router::get('/public/about', [SiteController::class, 'about']);

Router::get('/public/contact', [SiteController::class, 'contact']);

Router::get('/public/genres', [GenreController::class, 'index']);

Router::get('/public/media', [MediaController::class, 'index']);
Router::get('/public/media/home', [MediaController::class, 'home']);