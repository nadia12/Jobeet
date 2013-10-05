<?php
namespace Ibw\KoperasiBundle\Tests\Utils;

use Ibw\KoperasiBundle\Utils\Koperasiku;

class KoperasiTest extends \PHPUnit_Framework_TestCase
{
    public function testSlugify()
    {
       /* $this->assertEquals('sensio', Koperasiku::slugify('Sensio'));
        $this->assertEquals('sensio-labs', Koperasiku::slugify('sensio labs'));
        $this->assertEquals('sensio-labs', Koperasiku::slugify('sensio labs'));
        $this->assertEquals('paris-france', Koperasiku::slugify('paris,france'));
        $this->assertEquals('sensio', Koperasiku::slugify(' sensio'));
        $this->assertEquals('sensio', Koperasiku::slugify('sensio '));*/

        $this->assertEquals('n-a', Koperasiku::slugify(''));
        $this->assertEquals('n-a', Koperasiku::slugify(' - '));
        
    }
}