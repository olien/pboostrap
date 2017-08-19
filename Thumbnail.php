<?php
namespace pbootstrap;

class Thumbnail extends Control
{
    public function __construct($image, $title = '', $description = '', $buttons = '')
    {
        $this->_html .= '<div class="thumbnail">
                        <img src="' . $image . '" alt="">
                        <div class="caption">
                          <h3>' . $title . '</h3>
                          <p>' .  $description . '</p>
                          ' .  $buttons . '
                        </div>
                      </div>';
    }
}
