<?php
namespace pbootstrap;

class ButtonGroup extends Control
{
    public function __construct($buttons)
    {
        $this->_html .= '<div class="btn-group" role="group" aria-label="...">';
        foreach($buttons as $button)
        {
            $this->_html .= $button;
        }        
        $this->_html .= '</div>';  
    }
}
