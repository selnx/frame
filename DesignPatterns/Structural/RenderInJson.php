<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * RenderInJson类
 */
class RenderInJson extends Decorator
{
    /**
     * render data as JSON
     *
     * @return mixed|string
     */
    public function renderData()
    {
        echo 'RenderInJson';
        $output = $this->wrapped->renderData();

        return json_encode($output);
    }
}