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
        $p = new Super(0);
        $this->assertInstanceOf(Super::class, $p);
    }
}
