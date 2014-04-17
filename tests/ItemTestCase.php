<?php
use Diabloheroes\D3api\Item;
use Diabloheroes\D3api\Connector\Stub\Item as StubItem;
/**
 * Created by PhpStorm.
 * User: Luuk
 * Date: 4/15/14
 * Time: 7:41 PM
 */

class ItemTestCase extends \PHPUnit_Framework_TestCase{

    /**
     * @var Item
     */
    private $item;

    public function setUp()
    {
        $this->item = new Item("item/CkQI15rXiQUSBwgEFX_5Tl0d8nAHrR2aBgDLHSK8Wy8dnQeVJB1RUwyyIgsIARWKQgMAGA4gKjCJAjjXA0AASA9QDmCRBBj-5ffUC1AEWAI", Item::EU);

        $this->item->connector = new StubItem();

        $this->item->fetch();
    }

    public function test_getName()
    {
        $this->assertSame("The Font", $this->item->getName());
    }

    public function test_getId()
    {
        $this->assertSame("Helm_208", $this->item->getId());
    }
} 