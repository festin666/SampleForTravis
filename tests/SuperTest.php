<?php
/**
 * Created by PhpStorm.
 * User: mrfes
 * Date: 15.01.2017
 * Time: 18:28
 */

namespace Festin666\TravisCiTest\tests;

use Festin666\TravisCiTest\Super;


class SuperTest extends \PHPUnit_Framework_TestCase
{

    public function testFirst()
    {
        $p = new Super();
        $this->assertInstanceOf(Super::class, $p);
    }

    public function testSetPictureIdWithGood1()
    {
        $url = "https://www.shutterstock.com/ru/image-photo/blue-eyed-cat-259729697?language=ru&src=Ht5H3kn8sIqC2u23BCfxYw-1-1";
        $p = new Super($url);
        $this->assertEquals("259729697", $p->getPictureId());
    }

    public function testSetPictureIdWithGood2()
    {
        $url = "https://www.shutterstock.com/ru/image-vector/set-cats-silhouettes-on-white-background-266348171";
        $p = new Super($url);
        $this->assertEquals("266348171", $p->getPictureId());
    }

    public function testSetPictureIdWithGood3()
    {
        $url = "513884293";
        $p = new Super($url);
        $this->assertEquals("513884293", $p->getPictureId());
    }

}
