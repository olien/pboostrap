<?php
namespace pbootstrap;

class Button extends Control
{
    public function __construct($title, $params = array())
    {
        if(isset($params['href']))
        {
            $this->addAttribute('href', $params['href']);
            $this->_tag = 'a';
        }
        else
        {
            $this->_tag = 'button';
        }
        
        $this->addAttribute('class', 'btn');
        $this->addAttributeIfExists($params, 'collapse', 
                [['data-toggle', 'collapse'],
                    ['href', '#%s']]);
        
        $this->addAttributeIfExists($params, 'data-toggle', ['data-toggle', '%s']);
        $this->addAttributeIfExists($params, 'data-dismiss', ['data-dismiss', '%s']);
        $this->addAttributeIfExists($params, 'id', ['id', '%s']);
        $this->addAttributeIfExists($params, 'size', ['class', 'btn-%s']);
        $this->addAttributeIfExists($params, 'style', ['class', 'btn-%s']);
        $this->addAttributeIfExists($params, 'type', ['type', '%s']);
        $this->addAttributeIfExists($params, 'onclick', ['onclick', '%s']);
        $this->addAttributeIfExists($params, 'css', ['style', '%s']);
        $this->addAttributeIfExists($params, 'class', ['class', '%s']);
        
        if(isset($params['icon']))
        {
            $this->_childs[] = new Icon($params['icon'], ['size' => 'lg']);
        }
        
        $this->_childs[] = $title;
    }
}
