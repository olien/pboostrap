<?php
namespace pbootstrap;

class Section extends Control
{
    public function __construct($title, $content, $params = [])
    {
        $css = '';
        $bgFixed = "";
        $bgColor = 'transparent';
        $height = 50;
        if(isset($params['background-attachment']))
        {
            $bgFixed = "background-attachment: fixed;";
        }
        $bgImg = '';
        if(isset($params['background-image']))
        {
            $bgImg = 'background-image: url(\'' . getPath() . $params['background-image'] . '\');';
        }
        if(isset($params['css']))
        {
            $css = $params['css'];
        }
        $this->_html .= '<div style="' . $bgImg . 'background-repeat: no-repeat; background-color: ' . $bgColor . ';
             background-size: cover;
             height: ' . $height . 'vh;
             background-position: center;
             ' . $bgFixed . ';' . $css . '">
            <div class="jumbotronContent">
                <div class="jumbotronSubContent" style="text-shadow: white 0px 0px 20px;">
                    <div>
                        <h2>' . $title . '</h1>
                    </div>
                    <div>
                        ' . $content() . '
                    </div>
                </div>
            </div>
        </div>';
    }
}
