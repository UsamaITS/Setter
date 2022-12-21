<?php
use Illuminate\Support\Facades\Route;

use Usama\Setter\Setter;

Route::get('/setter/{name}', function($sName) {
    dd(1);
    $oGreetr = new Setter();
    return $oGreetr->setter($sName);
});
