<?php
namespace app\module\controller;
/**
 * 幻灯片
 */
class SliderController extends ModuleController
{
    protected $config = [];
    protected $filter = [];

    public function fetchHtml()
    {
        return $this->fetch('module@Slider/fetchHtml');
    }
}