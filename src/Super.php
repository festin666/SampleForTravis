<?php
/**
 * Created by PhpStorm.
 * User: mrfes
 * Date: 15.01.2017
 * Time: 23:43
 */

namespace Festin666\TravisCiTest;

class Super {
    private $pictureId;

    public function __construct($id)
    {
        $this->pictureId = $id;
    }

    public function getPictureId() {
        return $this->pictureId;
    }
}