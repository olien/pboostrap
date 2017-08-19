<?php
namespace pbootstrap;

class ColorPicker extends Control
{
    public function __construct($title, $name, $value = null, $params = array())
    {
        if($value == null || $value == "0")
        {
            $value = \Color::TRANSPARENT;
        }
        $this->_html .= '<div class="form-group">';
        $this->_html .= '<label>' . $title . '</label>';
        $this->_html .= '<input type="text" style="background-color: ' . $value . '" '
                . 'class="form-control" name="' . $name . '" id="' . $name . '" />';
        $this->_html .= '</div>';
        $this->_html .= '<script>';
        $this->_html .= '$( document ).ready(function() {';
        $this->_html .= '   $(function() {';
        $this->_html .= '               $("#' . $name . '").colorpicker({';
        $this->_html .= '                   color: "transparent"';
        $this->_html .= '               }).on("changeColor", function(e) {';
        $this->_html .= '                   $("#' . $name .'").css("background-color", $("' . $name . '").val());';
        $this->_html .= '               });';
        $this->_html .= '       $("#' . $name .'").val("' . $value . '");';
        $this->_html .= '           });';
        $this->_html .= '});';
        $this->_html .= '</script>';
    }
}
