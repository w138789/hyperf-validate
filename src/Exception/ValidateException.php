<?php

namespace Mzh\Validate\Exception;

class ValidateException extends \Exception
{
    protected $error;

    public function __construct($error)
    {
        $this->error   = $error;
        $this->message = is_array($error) ? implode(PHP_EOL, $error) : $error;
    }

    /**
     * 获取验证错误信息
     * @access public
     * @return array|string
     */
    public function getError()
    {
        return $this->error;
    }
}