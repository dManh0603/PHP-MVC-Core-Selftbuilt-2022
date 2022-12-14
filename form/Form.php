<?php
/**
 * User: taykh
 * Date: 12/5/2022
 * Time: 10:29 AM
 **/

namespace dmanh0603\phpmvc\form;

use dmanh0603\phpmvc\Model;

class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new InputField($model, $attribute);
    }
}