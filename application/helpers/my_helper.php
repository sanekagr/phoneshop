<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('die_r')){
    /** print-r and die
     * @param $input - array, value
     */
    function die_r($input){

        echo '<pre>';
        print_r($input);
        die;
        echo '</pre>';

    }
}

if(!function_exists('make_hash')){
    /**
     * @param $pass - password
     * @return string - password with hash
     */
    function make_hash($pass){

        return sha1('$$$' . md5($pass) . '$$$');

    }

}

if(!function_exists('trim_array')) {

    /**clean whitespaces from the sides
     *
     * @param $array - array with strings
     * @return array - array with trimmed strings
     */
    function trim_array($array)
    {

        $array2 = array();

        foreach ($array as $arr) {
            $array2[] = trim($arr);
        }

        return $array2;

    }
}