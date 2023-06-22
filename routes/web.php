<?php

Route::get("/", function() {
    return "Hola Deplynautas";
});

Route::get("/saludame/:nombre", function($nombre, Request $request) {
    return "Hola " . $nombre . " tu edad es " . $request->edad . " años.";
});
