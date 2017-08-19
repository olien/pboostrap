<?php
namespace pbootstrap;

class HiddenField extends Control
{
    public function __construct($name, $value = null)
    {
        $this->_html .= sprintf('<input type="hidden" name="%s" id="%s" value="%s" />', $name, $name, $value);
    }
}
