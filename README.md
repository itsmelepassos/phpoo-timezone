# phpoo-timezone

[![Maintainer](http://img.shields.io/badge/maintainer-@itsmelepassos-blue.svg?style=flat-square)](https://twitter.com/itsmelepassos)
[![Source Code](http://img.shields.io/badge/source-itsmelepassos/phpoo--timezone-blue.svg?style=flat-square)](https://github.com/itsmelepassos/phpoo-timezone)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/itsmelepassos/phpo--timezone.svg?style=flat-square)](https://packagist.org/packages/itsmelepassos/phpoo-timezone)
[![Latest Version](https://img.shields.io/github/release/itsmelepassos/phpoo-timezone.svg?style=flat-square)](https://github.com/itsmelepassos/phpoo-timezone/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/itsmelepassos/phpoo-timezone.svg?style=flat-square)](https://scrutinizer-ci.com/g/itsmelepassos/phpoo-timezone)
[![Quality Score](https://img.shields.io/scrutinizer/g/itsmelepassos/phpoo-timezone.svg?style=flat-square)](https://scrutinizer-ci.com/g/itsmelepassos/phpoo-timezone)
[![Total Downloads](https://img.shields.io/packagist/dt/itsmelepassos/phpoo-timezone.svg?style=flat-square)](https://packagist.org/packages/itsmelepassos/phpoo-timezone)


`````php
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
````

