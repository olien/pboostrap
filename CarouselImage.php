<?php
namespace pbootstrap;

class CarouselImage
{
    public $image;
    public $title;
    public $description;
    
    public function __construct($image, $title, $description)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
    }
}
