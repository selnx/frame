<?php
namespace DesignPatterns\Creational\Factory\Petty;
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/12/21
 * Time: 10:41
 */

class Talent extends ITalent
{
    public function __construct($pettyGril)
    {
        parent::__construct($pettyGril);
    }

    public function show()
    {
        $this->pettyGril->goodFace();
        $this->pettyGril->niceFigure();
        $this->pettyGril->greatTemperament();
    }
}