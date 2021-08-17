<?php
/*
 * Copyright (c) 2021. Leandro Passos.
 */

namespace ItsMeLePassos\Timezone;

/**
 * Class Timezone
 * @package ItsMeLePassos\Timezone
 */
class Timezone
{
    /**
     * setTimezone - define a timezone in the PHP official list
     * https://www.php.net/manual/en/timezones.php
     *
     * @param string $timezone
     * @return string
     */
    final public function setTimezone(string $timezone): string
    {
        return date_default_timezone_set($timezone);
    }
}