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
     * @param mixed $timezone
     */
    public function timezone(string $timezone = null): bool
    {
        return date_default_timezone_set($timezone);
    }
}