<?php
namespace pbootstrap;

class RangeInput extends Control
{
    public function __construct($title, $name, $value = null, $params = array())
    {
        $max = 100;
        $min = 0;
        if(isset($params['max']))
        {
            $max = $params['max'];
        }
        
        if(isset($params['min']))
        {
            $min = $params['min'];
        }
        
        if($value == null)
        {
            $value = $max;
        }
        
        $this->_html .= '<div class="form-group">';
        $this->_html .= '<label style="display: block">' . $title . '</label>';
        $this->_html .= '<input class="form-control" style="width: 90%; display: '
                . 'inline-block;" name="' . $name . '" id="' . $name . '" '
                . 'type="range" min="' . $min . '" max="' . $max . '" '
                . 'value="' . $value . '"  />';
        $this->_html .= '<span id="rangeValue' . $name . '"></span>';
        $this->_html .= '</div>';
        $this->_html .= '<script>';
        $this->_html .= '   $("#rangeValue' . $name . '").text($("#' . $name . '").val());';
        $this->_html .= '   $("#' . $name . '").change(function(){';
        $this->_html .= '   $("#rangeValue' . $name . '").text($(this).val());';
        $this->_html .= '});';
        $this->_html .= '</script>';
    }
}
