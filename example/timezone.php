<?php

use ItsMeLePassos\Timezone\Timezone;

require __DIR__ . "/../vendor/autoload.php";

(new Timezone())->timezone('America/Sao_Paulo');

echo date('d/m/Y H:i:s');