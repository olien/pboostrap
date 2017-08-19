<?php
namespace pbootstrap;

class DropDownListItem extends \ArrayObject
{
    public function __construct($name, $value, $image = null)
    {
        $this[] = $name;
        $this[] = $value;
        $this[] = $image;
    }

    public function name()
    {
        return $this[0];
    }

    public function value()
    {
        return $this[1];
    }

    public function image()
    {
        return $this[2];
    }
}
