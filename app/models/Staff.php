<?php

/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/8/22
 * Time: 10:38
 */
namespace App\Models;

class Staff
{
    public $stb_id;
    public $stb_loginid;
    public $stb_name;
    protected $row_rights;
    protected $row_id;
    protected $row_version;
    protected $row_status;
    protected $row_create_time;
    protected $row_update_time;
    protected $stb_share_code;

    public function stbId()
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