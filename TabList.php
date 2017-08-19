<?php
namespace pbootstrap;

class TabList extends Control
{
    public function __construct($items, $headerFunction, $bodyFunction, $params = array())
    {
        $position = '';
        $isVertical = false;
        if(isset($params['position']))
        {
            $position = 'nav-stacked';
            $isVertical = true;
        }
        
        $this->_html .= '<div class="col-lg-12 row">';
        if($isVertical)
        {
            $this->_html .= '<div class="col-3 tabContainer">';
        }
        $this->_html .= '<div class="container"><ul class="nav nav-tabs ' . $position . ($isVertical ? ' noBorder' : '') .'" '
                . 'role="tablist">';
        
        $ids = array();
        $i = 0;
        if(isset($params['selectedIndex']))
        {
            
            $selected = $params['selectedIndex'];
        }
        else
        {
            $selected = 0;
        }
        
        foreach($items as $item)
        {
            $ids[] = md5(uniqid(rand(), true));
            $this->_html .= '<li class="nav-item ' . ($i == $selected ? 'active' : '') . '">';
            $this->_html .= '<a class="nav-link" href="#tab' . $ids[$i] . '" role="tab" '
                    . 'data-toggle="tab" aria-controls="#tab' . $ids[$i] . '">';
            $this->_html .= $headerFunction($item);
            $this->_html .= '</a></li>';
            $i++;
        }
        $this->_html .= '</ul></div>';
        if($isVertical)
        {
            $this->_html .= '</div><div class="col-9">';
        }
        $this->_html .= '<div class="tab-content col-sm-12 ' . ($isVertical ? 'noBorder' : '') . '">';
        $i = 0;
        foreach($items as $item)
        {
            $this->_html .= '<div role="tabpanel" class="tab-pane ' . ($i == $selected ? 'active' : '') . '" '
                    . 'id="tab' . $ids[$i] . '">';
            $this->_html .= $bodyFunction($item);
            $this->_html .= '</div>';
                $i++;
        }
        $this->_html .= '</div>';
        if($isVertical)
        {
            $this->_html .= '</div>';
        }
        $this->_html .= '</div>';
    }
}
