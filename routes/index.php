<?php

use App\Controller\Hello;

return function (Mix\Vega\Engine $vega) {
    $vega->handleCall('/', [new Hello(), 'index'])->methods('GET');
};
