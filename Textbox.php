<?php
namespace pbootstrap;

class Textbox extends Control
{
    public function __construct($title, $name, $value = null, $params = array())
    {
        $type = 'text';
        if(isset($params['type']))
        {
            $type = $params['type'];
        }
        
        $disabled = false;
        if(isset($params['disabled']))
        {
            $disabled = $params['disabled'];
        }
        
        $focus = '';
        if(isset($params['focus']))
        {
            $focus = ' autofocus';
        }
        
        $class = $this->getValue($params, 'class', 'form-control');
        
        $placeHolder = $this->getValue($params, 'placeholder', null);
        $this->_html .= '<div class="form-group">' .
        ($title == '' ? '' : '<label for="' . $name . '">' . $title . '</label>') .
        '<input class="' . $class . '" name="' . $name . '" id="' . $name . '" placeholder="' . $placeHolder . '" type="' . $type . '" '
                . 'value="' . ($value == null || $value == '0' ? '' : $value) .'" '
                . (isset($params['required']) && $params['required']
                ? 'required=""' : '') . ($disabled ? ' disabled=""' : '') .' ' . $focus . ' />
    </div>';
    }
}
