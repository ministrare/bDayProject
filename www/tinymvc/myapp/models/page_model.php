<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 9/02/2019
 * Time: 11:42
 */

class Page_Model extends TinyMVC_Model
{
    function get_title()
    {
        return 'Hello';
    }

    function get_body_text()
    {
        return 'Hello World.';
    }
}