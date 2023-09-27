<?php

namespace App\Models;

class Benifits
{

    var $id;
    var $heading;
    var $content;
    var $image;

    function __construct($id, $heading, $content, $image)
    {
        $this->id = $id;
        $this->heading = $heading;
        $this->content = $content;
        $this->image = $image;
    }
}
