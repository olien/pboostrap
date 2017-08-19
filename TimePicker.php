<?php
namespace pbootstrap;

class TimePicker extends Control
{
    public function __construct($title, $name, $value = null, $params = [])
    {
        $this->_html .= '<div class="form-group">
                            <label>' . $title . '</label>
                            <input class="form-control" 
                            name="' . $name . '" id="' . $name . '" 
                            type="time" value="' .  $value . '" />
                        </div>
                ';
    }
}
