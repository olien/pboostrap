<?php
namespace pbootstrap;

class CaptionThumbnail extends Control
{
    public function __construct($title, $description, $params = [])
    {
        $bg = $this->getValue($params, 'bgImage', '');
        $url = $this->getValue($params, 'url', '#');
        $this->_html .= '<div class="imgSquare">
                        <div class="imgCaption" style="background-image: url(' . $bg . ')">
                            ' . ($url == '' ? '' : '<a href="' . $url . '" target="_blank" class="">') . 
                                '<div class="caption">
                                    <h4 class="">' . $title . '</h4>

                                    <p class="">' . $description . '</p>
                                </div>
                            ' . ($url == '' ? '' : '</a>') .
                        '</div>
                    </div>
                    ';
    }
}
