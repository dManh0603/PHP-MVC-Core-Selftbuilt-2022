<?php
/**
 * User: taykh
 * Date: 12/7/2022
 * Time: 9:41 PM
 **/

namespace dmanh0603\phpmvc;

use dmanh0603\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}