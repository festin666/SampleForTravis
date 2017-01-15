<?php
echo "Let's test Travis-CI!";

class Super {
    private $pictureId;

    public function __construct($pictureid)
    {
        $this->pictureId = $pictureid;
    }

    public function getPictureId() {
        return $this->pictureId;
    }
}