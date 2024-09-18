<?php

use RickySutanto\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use RickySutanto\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);