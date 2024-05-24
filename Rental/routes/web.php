<?php

return [
    ["GET /", "home@index"],

    ["GET /kendaraan", "kendaraan@index"],
    ["GET /kendaraan/create", "kendaraan@create"],
    ["POST /kendaraan", "kendaraan@store"],
    ["GET /kendaraan/show", "kendaraan@show"],
    ["GET /kendaraan/edit", "kendaraan@edit"],
    ["POST /kendaraan/update", "kendaraan@update"],
    ["POST /kendaraan/destroy", "kendaraan@destroy"],
];
