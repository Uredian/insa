<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    private $poneys;
    /**
     * Undocumented function
     * @dataProvider dataProvider
     * @return void
     */

    public function testRemovePoneyFromField(int $number, int $expected)
    {
        // Action
        $this->poneys->removePoneyFromField($number);

        // Assert
        $this->assertEquals($expected, $this->poneys->getCount());
    }

    public function dataProvider()
    {
        return array(
            array(2,6),
            array(1,7)
        );
    }

    public function setUp(): void
    {
        $this->poneys = new Poneys();
        $this->poneys->setCount(8);
    }

    public function tearDown(): void
    {
        unset($this->poneys);
    }
}
?>
