<?php

namespace App\Models;

class Benifits
{

    var $id;
    var $heading;
    var $content;

    function __construct($id, $heading, $content)
    {
        $this->id = $id;
        $this->heading = $heading;
        $this->content = $content;
    }
}
