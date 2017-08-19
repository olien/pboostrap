<?php
namespace pbootstrap;

class DropDown extends Control
{
    public function __construct($title, $name, $items, $value = null, $params = [])
    {
        $required = '';
        $multiple = '';
        if(isset($params['required']))
        {
            $required = ' required';
        }
        if(isset($params['multiple']))
        {
            $multiple = ' multiple';
        }
        $this->_html .= '<div class="form-group">';
        $this->_html .= '<label>' . $title . '</label>';
        $this->_html .= '<select class="selectpicker form-control" name="' . $name . '" id="' . $name . '"' . $required . $multiple . '>';
        
        foreach($items as $item)
        {
            if(is_array($value))
            {
                $this->_html .= '<option value="' . $item[1] . '" ' . 
                    (in_array($item[1], $value) ? "selected" : "") . 
                    (isset($item[2]) ? 
                        ' data-content="<img width=\'50\' src=\'' . $item[2] . '\' />' . $item[0] . '"' : '') . 
                        '>' . $item[0] . 
                    '</option>';
            }
            else
            {
                $this->_html .= '<option value="' . $item[1] . '" ' . 
                    ($item[1] == $value ? "selected" : "") . 
                        (isset($item[2]) ? 
                        ' data-content="<img width=\'50\' src=\'' . $item[2] . '\' />' . $item[0] . '"' : '') .
                        '>' . $item[0] . 
                    '</option>';
            }
        }
        $this->_html .= '</select>';
        $this->_html .= '</div>';
    }
}
