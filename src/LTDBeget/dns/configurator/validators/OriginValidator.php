<?php
/**
 * @author: Viskov Sergey
 * @date  : 4/12/16
 * @time  : 1:00 PM
 */

namespace LTDBeget\dns\configurator\validators;

/**
 * Class OriginValidator
 *
 * @package beget\lib\dns\lib\validators
 */
class OriginValidator
{
    const ORIGIN = "/^([a-z0-9-_]+\.)+[a-z0-9-_]+$/";

    /**
     * @param string $value
     * @return mixed
     */
    public static function validate(string $value)
    {
        return preg_match(self::ORIGIN, $value);
    }
}
