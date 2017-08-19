<?php
namespace pbootstrap;

class Panel extends Control
{
    public function __construct($title, $content, $obj = null, $params = [])
    {
        $state = 'secondary';
        $style = '';
        if(isset($params['style']))
        {
            $state = $params['style'];
        }
        if(isset($params['color']))
        {
            $style = 'style="background-color: ' . $params['color'] . '";';
        }
        $this->_html .= '<div class="card bg-' . $state . '">
                            <div class="card-header" ' . $style . '>' . $title . '</div>
                            <div class="card-block">' . $content($obj) . '</div>
                          </div>';
    }
}
