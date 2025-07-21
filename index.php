<?php

require __DIR__ . '/vendor/autoload.php';

use App\Model\Pessoa;

use Carbon\Carbon;

echo Carbon::now()->toDateTimeString()." - UTC";

$p = new Pessoa();
$p->apresentar();
