<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 05.11.16
 * Time: 16:38
 */

namespace lib;

/**
 * Class UpperCase
 * @package lib
 */
class UpperCase
{
    /**
     * @param string $field_name
     *
     * @return string
     */
    public static function makeSetterMethodByField($field_name)
    {
        return 'set' . self::upperCaseFirstSymbols($field_name);
    }

    /**
     * @param string $field_name
     *
     * @return string
     */
    public static function makeGetterMethodByField($field_name)
    {
        return 'get' . self::upperCaseFirstSymbols($field_name);
    }

    /**
     * @param string $field_name
     *
     * @return string
     */
    public static function upperCaseFirstSymbols($field_name)
    {
        $result = '';
        preg_match_all('|([^a-zA-Z]+)?([a-zA-Z]+)([^a-zA-Z]+)?|', $field_name, $fields);
        if (isset($fields[1], $fields[2], $fields[3])) {
            foreach ($fields[2] as $key => $item) {
                $result .= str_replace('_', '', $fields[1][$key])
                    . ucfirst($fields[2][$key]) .
                    str_replace('_', '', $fields[3][$key]);
            }
        }

        return $result;
    }
}
