<?php
namespace pbootstrap;

class ItemList extends Control
{
    public function __construct($name, $items, $showFunction, $params = [])
    {
        $css = '';
        if(isset($params['css']))
        {
            $css = ' style="' . $params['css'] . '"';
        }
        $this->_html .= '<div class="list-group" id="' . $name . '">';
        foreach($items as $item)
        {
            if(!isset($params['doNotSpecifyDivs']))
            {
                $this->_html .= '<span class="list-group-item"' . $css . '>';
            }
            $this->_html .= $showFunction($item);
            if(!isset($params['doNotSpecifyDivs']))
            {
                $this->_html .= '</span>';
            }
        }
        $this->_html .= '</div>';
    }
}
