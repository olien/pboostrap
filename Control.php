<?php
namespace pbootstrap;

class Control
{
    protected $_html;
    protected $_tag;
    protected $_attributes = [];
    protected $_childs = [];
    
    public function __toString()
    {
        if($this->_html == null)
        {
            $this->buildHtml();
        }
        
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
    
    protected function addAttribute($attribute, $value)
    {
        foreach($this->_attributes as &$tmpAttribute)
        {
            if($tmpAttribute['attribute'] == $attribute)
            {
                $tmpAttribute['value'] .= ' ' . $value;
                return null;
            }
        }
        $this->_attributes[] = ['attribute' => $attribute, 'value' => $value];
    }
    
    protected function addAttributeIfExists($params, $checkValue, $attributes)
    {
        if(isset($params[$checkValue]))
        {
            if(is_array($attributes[0]))
            {
                foreach($attributes as $attribute)
                {
                    $this->addAttribute($attribute[0], sprintf($attribute[1], $params[$checkValue]));
                }
            }
            else
            {
                $this->addAttribute($attributes[0], sprintf($attributes[1], $params[$checkValue]));
            }
        }
    }
    
    private function buildParamsAsHtml()
    {
        $returnValue = '';
        foreach($this->_attributes as $attribute)
        {
            $returnValue .= $attribute['attribute'] . '="' . 
                    $attribute['value'] . '" ';
        }
        return $returnValue;
    }
    
    public function buildHtml()
    {
        $this->_html = '<' . $this->_tag . ' ' . $this->buildParamsAsHtml() . '>';
        foreach($this->_childs as $child)
        {
            $this->_html .= $child;
        }
        $this->_html .= '</' . $this->_tag . '>';
    }
}
