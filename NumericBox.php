<?php
namespace pbootstrap;

class NumericBox extends Control
{
    public function __construct($title, $name, $value = null, $params = [])
    {
        $step = '0.01';
        $min = '';
        $max = '';
        $required = '';
        if(isset($params['step']))
        {
            $step = $params['step'];
        }
        
        if(isset($params['min']))
        {
            $min = ' min="' . $params['min'] . '"';
        }
        
        if(isset($params['max']))
        {
            $min = ' max="' . $params['max'] . '"';
        }
        
        if(isset($params['required']))
        {
            $required = ' required';
        }
        
        $this->_html .= '<div class="form-group">
        ' . ($title != '' ? '<label>' . $title . '</label>' : '') . 
        '<input class="form-control" name="' . $name . '"  id="' . $name . '" 
            type="number" step="' . $step . '" value="' . $value . '" ' . $min . $max . $required . ' />
    </div>';
    }
}
