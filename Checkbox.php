<?php
namespace pbootstrap;

class Checkbox extends Control
{
    public function __construct($title, $name, $checked, $params = [])
    {
        $disabled = false;
        if(isset($params['disabled']))
        {
            $disabled = $params['disabled'];
        }
        $this->_html .= '<label class="checkbox-inline">'
                . '<input ' . ($disabled ? "disabled='disabled'" : "") .
                ' name="' . $name . '" id="' . $name . '" type="checkbox" ' . 
                ($checked ? "checked" : "") . '>
        ' .  $title . '</label>';
    }
}
