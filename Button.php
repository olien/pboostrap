<?php
namespace pbootstrap;

class Button extends Control
{
    public function __construct($title, $params = array())
    {
        $style = 'light';
        $type = 'button';
        $css = '';
        $class = '';
        $size = '';
        $id = '';
        $dataDismiss = '';
        
        $tag = 'button';
        
        $dataToggle = '';
        $href = '';
        if(isset($params['collapse']))
        {
            $dataToggle = ' data-toggle="collapse"';
            $href = ' href="#' . $params['collapse'] . '"';
        }
        
        if(isset($params['data-toggle']))
        {
            $dataToggle = ' data-toggle="' . $params['data-toggle'] . '"';
        }
        
        if(isset($params['id']))
        {
            $id = ' id="' . $params['id'] . '"';
        }
        if(isset($params['href']))
        {
            $href = ' href="' . $params['href'] . '"';
            $tag = 'a';
        }
        
        if(isset($params['data-dismiss']))
        {
            $dataDismiss = ' data-dismiss="' . $params['data-dismiss'] . '"';
        }
        
        if(isset($params['size']))
        {
            $size = ' btn-' . $params['size'];
        }
        
        if(isset($params['style']))
        {
            $style = $params['style'];
        }
        
        if(isset($params['type']))
        {
            $type = $params['type'];
        }
        
        $onClick = '';
        if(isset($params['onclick']))
        {
            $onClick = 'onclick="' . $params['onclick'] . '"';
        }
        
        $icon = '';
        if(isset($params['icon']))
        {
            $icon = '<i class="fa fa-' . $params['icon'] . ' fa-lg"></i>';
        }
        
        if(isset($params['css']))
        {
            $css = 'style="' . $params['css'] . '"';
        }
        
        if(isset($params['class']))
        {
            $class = $params['class'];
        }
        
        $this->_html = '<' . $tag . ' type="' . $type . '"' . $dataToggle . $href . ' class="btn btn-' . $style . ' ' . $size . ' ' . $class . '" ' . $onClick . ' ' . $css . $dataDismiss . $id . '>' . $icon . ' ' . $title . '</' . $tag . '>';
    }
}
