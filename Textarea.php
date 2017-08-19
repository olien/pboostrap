<?php
namespace pbootstrap;

class Textarea extends Control
{
    public function __construct($title, $name, $value = null, $params = array())
    {
        $required = false;
        $nbLines = 5;
        
        if(isset($params['required']))
        {
            $required = $params['required'];
        }
        
        
        $class = $this->getValue($params, 'class', 'form-control');
        
        if(isset($params['nbLines']))
        {
            $nbLines = $params['nbLines'];
        }
        
        $placeHolder = $this->getValue($params, 'placeholder', '');
        
        $this->_html .= '<div class="form-group">';
        $this->_html .= '<label>' . $title . '</label>';
        $this->_html .= '<textarea placeholder="' . $placeHolder . '" rows="' . $nbLines . '" class="' . $class . '" '
                . 'id="' . $name .'" name="' . $name . '" ' . ($required ? 'required=""' : '') . '>'
                . ($value == null || $value == "0" ? '' : $value) . '</textarea>';
        $this->_html .= '</div>';
        
    }
}
