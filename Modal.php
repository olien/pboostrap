<?php
namespace pbootstrap;

class Modal extends Control
{
    public function __construct($title, $name, $content, $footer, $params = [])
    {
        $height = 60;
        $action = '';
        $width = '40';
        if(isset($params['height']))
        {
            $height = $params['height'];
        }
        
        if(isset($params['width']))
        {
            $width = $params['width'];
        }
        
        if(isset($params['action']))
        {
            $action = $params['action'];
        }
        
        $css = '';
        if(isset($params['css']))
        {
            $css = ' style="' . $params['css'] . '"';
        }
        
        $this->_html .= '<div class="modal fade" id="' . $name . '" role="dialog" ' . $css . '>' .
                        ($action != '' ? '<form action="' . $action . '" method="post">' : '') .
                            '<div class="modal-dialog" style="margin-top:10px;width:' . 
                            $width . '%;max-width: ' . $width . '%">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h4 class="modal-title">' . $title . '</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body" style="overflow-y: scroll; height:' . $height . 'vh;">';
		$this->_html .= $content();
		$this->_html .= '   </div>
                                    <div class="modal-footer">' .
                                    $footer() .
                                    '</div>
                                </div>
                            </div>' .
                            ($action != '' ? '</form>' : '') .
                        '</div>';
    }
}