<?php
namespace pbootstrap;

class Icon extends Control
{
    public function __construct($icon, $params = [])
    {
        $size = 1;
        if(isset($params['size']))
        {
            $size = $params['size'];
        }
        $css = '';
        if(isset($params['css']))
        {
            $css = $params['css'];
        }
        $color = '';
        if(isset($params['color']))
        {
            $color = 'color: ' . $params['color'] . ';';
        }
        $this->_html .= '<i class="fa fa-' . $icon . ' fa-' . $size . 'x" style="' . $color . ' ' . $css . '" aria-hidden="true"></i>';
    }
}
