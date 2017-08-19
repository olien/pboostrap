<?php
namespace pbootstrap;

class Accordion extends Control
{
    public function __construct($items, $headerFunction, $bodyFunction, $params = [])
    {
        $i = 0;
        foreach($items as $item)
        {
            $expanded = '';
            if(isset($params['expandedIds']) && in_array($i, $params['expandedIds']))
            {
                $expanded = ' in';
            }
            
            $id = md5(uniqid(rand(), true));
            $this->_html .= '
            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="heading' . $id . '">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse' . $id . '" 
                           aria-expanded="true" aria-controls="collapse' . $id . '">';
            $this->_html .= $headerFunction($item);
            $this->_html .= '</a>
                    </div>
                    <div id="collapse' . $id . '" class="card-block collapse collapse-content' . $expanded . '" role="tabpanel" 
                         aria-labelledby="heading' . $id . '">';
            $this->_html .= $bodyFunction($item);
            $this->_html .= '       </div>
                            </div>
                        </div>';
            $i++;
        }
    }
}