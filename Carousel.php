<?php
namespace pbootstrap;

class Carousel extends Control
{
    public function __construct($id, $images, $params = [])
    {
        $this->_html .= '<div id="' . $id . '" class="carousel slide" data-ride="carousel">';
        if(true)
        {
            $this->_html .= '<ol class="carousel-indicators">';
            $i = 0;
            foreach($images as $image)
            {
                $this->_html .= '<li data-target="#' . $id . '" data-slide-to="' . $i . '" ' . 
                        ($i == 0 ? 'class="active"' : '') . '></li>';
                $i++;
            }
            
            $this->_html .= '</ol>';
        }
                            
        $this->_html .= '<div class="carousel-inner">';
        $i = 0;
        foreach($images as $image)
        {
            $this->_html .= '<div class="carousel-item ' . ($i == 0 ? 'active' : '') . '">
                                <img class="d-block w-100" src="' . $image->image . '" alt="' . $image->title . '">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>' . $image->title . '</h3>
                                    <p>' . $image->description . '</p>
                                  </div>
                              </div>';
            $i++;
        }
                              
        $this->_html .= '   <a class="carousel-control-prev" href="#' . $id . '" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#' . $id . '" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                          </div>';
    }
}
