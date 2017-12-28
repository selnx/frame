<?php

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 10:38
 */

class Staff
{
    public $stb_id;
    public $stb_loginid;
    public $stb_name;

    public  function stbId()
    {
        return $this->stb_id;
    }

    public function stbLoginId()
    {
        return $this->stb_loginid;
    }

    public function stbName()
    {
        return $this->stb_name;
    }
}