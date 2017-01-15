<?php
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