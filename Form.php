<?php
namespace pbootstrap;

class Form extends Control
{
    public function __construct($action, $content, $params = array())
    {
        $id = '';
        if(isset($params['id']))
        {
            $id = ' id="' . $params['id']  . '"';
        }
        
        $css = '';
        if(isset($params['css']))
        {
            $css = ' style="' . $params['css']  . '"';
        }
        
        $submit = 'onsubmit="' . $this->getValue($params, 'onsubmit', '') . '"';
        
        $this->_html .= '<form method="POST"' . $id . ' action="' . $action . '"' . $css . ' . ' . $submit . '>';
		$this->_html .= $content();
		$this->_html .= '</form>';
    }
}
