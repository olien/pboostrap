<?php

namespace pbootstrap;

class Table extends Control
{

    public function __construct($columns, $items, $headerFunction, $contentFunction, $params = [])
    {
        $id = '';
        if (isset($params['id']))
        {
            $id = 'id="' . $params['id'] . '"';
        }

        $this->_html .= '<table class="table" ' . $id . '>';
        $this->_html .= '   <thead>';
        $this->_html .= '       <tr>';
        foreach ($columns as $column)
        {
            $this->_html .= '           <th>' . $headerFunction($column) . '</th>';
        }
        $this->_html .= '       </tr>';
        $this->_html .= '   </thead>';
        $this->_html .= '   <tbody>';
        foreach ($items as $item)
        {
            if (isset($params['doNotWriteTrs']))
            {
                $this->_html .= '' . $contentFunction($item) . '';
            } else
            {
                $this->_html .= '       <tr>';
                foreach ($item as $subItem)
                {
                    $this->_html .= '<td>' . $contentFunction($subItem) . '</td>';
                }
                $this->_html .= '       </tr>';
            }
        }
        $this->_html .= '   </tbody>';
        $this->_html .= '</table>';
    }

}
