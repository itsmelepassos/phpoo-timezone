<?php

/**
 * Calls the composer autoload. Then, calls the respective class for the timezone.
 * Chama o autoload do composer. Então, chame a classe respectiva para o fuso-horário.
 */
require __DIR__ . "/../vendor/autoload.php";

use ItsMeLePassos\Timezone\Timezone;

/**
 * Calls the method setTimezone and with one the supported timezones (https://www.php.net/manual/en/timezones.php).
 * Chama o método setTimezone com um dos fusos-horários suportados (https://www.php.net/manual/en/timezones.php).
 *
 * It can also be used in a central controller in your project.
 * Pode também ser usado em um controlador central no seu projeto.
 */
(new Timezone())->timezone('America/Sao_Paulo');

/**
 * Displays the time corresponding to the timezone configured above.
 * Exibe a hora correspondente ao fuso-horário configurado acima
 */
echo date('d/m/Y H:i:s');