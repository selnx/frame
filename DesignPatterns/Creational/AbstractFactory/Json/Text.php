<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 2017/11/7
 * Time: 16:57
 */
namespace DesignPatterns\Creational\AbstractFactory\Json;

use DesignPatterns\Creational\AbstractFactory\Text as BaseText;

/**
 * Class Text
 *
 * 该类是以 JSON 格式输出的具体文本组件类
 */
class Text extends BaseText
{
    /**
     * 以 JSON 格式输出的渲染
     *
     * @return string
     */
    public function render()
    {
        return json_encode(array('content' => $this->text));
    }
}