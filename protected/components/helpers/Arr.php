<?php
/**
 * Created by Mota-systems company.
 * User: mota-systems
 * Date: 17.03.13
 * Time: 16:16
 * All rights are reserved
 */

class Arr
{


    public static function get(array $array, $key, $default = NULL)
    {
        return isset($array[$key]) ? $array[$key] : $default;
    }
}