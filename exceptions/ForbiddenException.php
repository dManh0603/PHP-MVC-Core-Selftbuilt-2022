<?php

namespace dmanh0603\phpmvc\exceptions;

class ForbiddenException extends \Exception
{
    protected $code = 403;
    protected $message = 'You don\'t have permission to access this page';
}