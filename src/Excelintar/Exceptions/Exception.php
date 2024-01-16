<?php

namespace heyaender\Excelintar\Exceptions;

/**
 * Class Exception
 *
 * @package heyaender\Excelintar
 */
class Exception extends \RuntimeException
{
    public const ERROR_ADDRESS = 101;
    public const ERROR_FILE = 201;
    public const ERROR_RUNTIME = 901;

    protected static $defaultCode = self::ERROR_RUNTIME;

    public static function throwNew($message, ...$args)
    {
        throw new Exception(sprintf($message, ...$args), self::$defaultCode);
    }
}

// EOF