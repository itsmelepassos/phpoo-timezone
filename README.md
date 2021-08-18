# PHPOO-Timezone by Leandro Passos

[![Maintainer](http://img.shields.io/badge/maintainer-@itsmelepassos-blue.svg?style=flat-square)](https://twitter.com/itsmelepassos)
[![Source Code](http://img.shields.io/badge/source-itsmelepassos/phpoo--timezone-blue.svg?style=flat-square)](https://github.com/itsmelepassos/phpoo-timezone)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/itsmelepassos/phpo--timezone.svg?style=flat-square)](https://packagist.org/packages/itsmelepassos/phpoo-timezone)
[![Latest Version](https://img.shields.io/github/release/itsmelepassos/phpoo-timezone.svg?style=flat-square)](https://github.com/itsmelepassos/phpoo-timezone/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/itsmelepassos/phpoo-timezone.svg?style=flat-square)](https://scrutinizer-ci.com/g/itsmelepassos/phpoo-timezone)
[![Quality Score](https://img.shields.io/scrutinizer/g/itsmelepassos/phpoo-timezone.svg?style=flat-square)](https://scrutinizer-ci.com/g/itsmelepassos/phpoo-timezone)
[![Total Downloads](https://img.shields.io/packagist/dt/itsmelepassos/phpoo-timezone.svg?style=flat-square)](https://packagist.org/packages/itsmelepassos/phpoo-timezone)

###### EN: PHPOO-Timezone is a package that allows the developer to change the time zone in your software without having to change its server's php.ini file.

PT-BR: PHPOO-Timezone é um pacote que permite que o desenvolvedor possa alterar o fuso horário em seu software sem a
necessidade de se alterar o arquivo php.ini do seu servidor.

---

### Highlights/Destaques

- EN: Simple installation
    - PT-BR: Instalação Simples


- EN: PSR-2 and PSR-4 ready
    - PT-BR: Pronto para os padrões PSR-2 e PSR-4


- EN: Installable via Composer
    - PT-BR: Instalável via Composer

---

###### EN: How to install in my project? A: Insert this line below in your composer.json file, as a "require"

#### PT-BR: Como instalar em meu projeto? R: Insira esta linha abaixo em seu arquivo composer.json, como um "require"

```bash
"itsmelepassos/phpoo-timezone": "^1.0"
```

###### EN: Or type this command in your terminal or bash

#### PT-BR: Ou digite este comando em seu terminal ou bash

```bash
composer require itsmelepassos/phpoo-timezone
```

---

## Documentation/Documentação

###### EN: There is an example file of how you can call Timezone directly in your index.php file in the "example" folder, or you can also refer to the code below to serve as an example.

PT-BR: Há um arquivo de exemplo de como você pode chamar direto o Timezone em seu arquivo index.php na pasta "example",
ou pode também consultar o código abaixo para servir como exemplo

```php
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
```

###### EN: Translation results If you want to use it in any controller, the recommendation is to insert it in the General Controller of your system and call from as follows, directly inserting the parameter when calling the tiemzone method, or a variable, or a constant:

PT-BR: Caso queira usar em algum controlador, a recomendação é inserir no Controller geral do seu sistema e chamar da
seguinte forma, inserindo diretamente o parâmetro ao chamar o método tiemzone, ou uma variável, ou uma constante:

```php
<?php
use ItsMeLePassos\Timezone\Timezone;

class Controller
{
    /** @var Timezone */
    protected $timezone;
    
    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $this->timezone = (new Timezone())->timezone('America/Sao_Paulo');
    }
}
```

```php
<?php

/**
 * EN: No need to call anything else: the inherited class's constructor already assigns the custom timezone.
 * PT-BR: Não precisa chamar mais nada: o construtor da classe herdada já atribui o fuso horário personalizado.
 */
class FooController extends Controller
{
    
}
```

---

### Support/Suporte

###### EN: In case you discover any vulnerability, suggest some fixes or wish to contribute to the project, please contact the developer (me) by email [itsmelepassos@gmail.com]

PT-BR: No caso de descobrir alguma vulnerabilidade, sugerir algumas correções ou desejar contribuir para o projeto,
entre em contato com o desenvolvedor (eu) por e-mail [itsmelepassos@gmail.com]

---

###### EN: Test/implement at ease
PT-BR: Teste/implemente à vontade

### ThankYou/Obrigado

---

## Credits/Créditos

- [Leandro Passos](https://github.com/itsmelepassos) (Developer)

---

## License

The MIT License (MIT). Please see [License File](https://github.com/itsmelepassos/phpoo-timezone/blob/master/LICENSE)
for more information.