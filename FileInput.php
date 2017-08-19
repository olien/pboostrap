<?php
namespace pbootstrap;

use pbootstrap\Constants\State;
use pbootstrap\Constants\Icons;

class FileInput extends Control
{
    public function __construct($title, $name, $value = null, $params = array())
    {
        $this->_html .= '<label>' . $title . '</label>';
        if($value != null && $value != "0")
        {
            $this->_html .= '<div id="thumbImg' . $name . '">';
            $this->_html .= '<br/>';
            $this->_html .= '<img width="120" src="' . $value . '" alt="' . $title . '"/>';
            $this->_html .= new Button('', ['style' => State\DANGER, 
                'icon' => Icons\REMOVE, 'id' => 'btnRemoveImg' . $name]);
            $this->_html .= '</div>'; 
        }
        elseif($value == "0")
        {
            $value = null;
        }
        $this->_html .= '<input id="file-' . $name . '" name="file-' . $name . '[]" data-show-upload="false" data-show-preview="false" type="file" class="file">';
        $this->_html .= '<input type="hidden" name="' .$name . '" id="' . $name . '" value="' . $value . '"/>';
        $this->_html .= '<script>';
        $this->_html .= '$( document ).ready(function() {';
        $this->_html .= '   $("#btnRemoveImg' . $name . '").click(function(){';
        $this->_html .= '   $("#' . $name . '").val("");';
        $this->_html .= '   $("#file-' . $name . '").fileinput("clear").fileinput("refresh");';
        $this->_html .= '   $("#thumbImg' .  $name . '").remove();';
        $this->_html .= '   });';
        $this->_html .= '$("#file-' . $name . '").fileinput({';
        $this->_html .= '   language: "fr",';
        $this->_html .= '   dropZoneEnabled: false,';
        $this->_html .= '   uploadUrl: "' . getPath() . 'actions/upload/upload.php?id=' . $name . '",';
        $this->_html .= '   allowedFileExtensions: ["jpg", "png", "gif"],';
        $this->_html .= '   uploadAsync: true';
        if ($value != null)
        {
            $this->_html .= '   ,';
            $this->_html .= '   initialPreview: ["' . $value . '"],';
            $this->_html .= '   initialPreviewAsData: true,';
            $this->_html .= '   initialPreviewConfig: [';
            $this->_html .= '   {caption: "' . $value . '", size: 930321, width: "120px", key: 1}';
            $this->_html .= '   ],';
            $this->_html .= '   deleteUrl: "' . getPath() . 'actions/upload/removeImage.php",';
            $this->_html .= '   overwriteInitial: false,';
            $this->_html .= '   initialCaption: "' . $value . '"';
        }
        $this->_html .= '   }).on("filebatchselected",';
        $this->_html .= '   function(event, files) {';
        $this->_html .= '   $("#file-' . $name . '").fileinput("upload");';
        $this->_html .= '   }).on("fileuploaded", function (event, data, id, index) {';
        $this->_html .= '   var fname = data.files[index].name,';
        $this->_html .= '   out = "<li>Uploaded file # " + (index + 1) + " - " +';
        $this->_html .= '   fname + " successfully.</li>";';
        $this->_html .= '   $("#' . $name . '").val(data.response.initialPreviewConfig[0]["url"]);';
        $this->_html .= '   }).on("fileuploaderror", function(event, data, msg) {';
        $this->_html .= '   var form = data.form, files = data.files, extra = data.extra,';
        $this->_html .= '   response = data.response, reader = data.reader;';
        $this->_html .= '   console.log("File upload error");';
        $this->_html .= '   alert(msg);';
        $this->_html .= '   });';
        $this->_html .= '});';
        $this->_html .= '</script>';
    }
}
