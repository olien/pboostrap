<?php
namespace pbootstrap;

class Control
{
    protected $_html;
    
    public function __toString()
    {
        return $this->_html;
    }
    
    protected function getValue($params, $key, $defaultValue)
    {
        if(isset($params[$key]))
        {
            return $params[$key];
        }
        else
        {
            return $defaultValue;
        }
    }
}
