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

	public function test_getIcon()
	{
		$this->assertSame("helm_208_wizard_male", $this->item->getIcon());
	}

	public function test_getDisplayColor()
	{
		$this->assertSame("yellow", $this->item->getDisplayColor());
	}

	public function test_getTooltipParams()
	{
		$this->assertSame("item/CkQI15rXiQUSBwgEFX_5Tl0d8nAHrR2aBgDLHSK8Wy8dnQeVJB1RUwyyIgsIARWKQgMAGA4gKjCJAjjXA0AASA9QDmCRBBj-5ffUC1AEWAI", $this->item->getTooltipParams());
	}

	public function test_getReguiredLevel()
	{
		$this->assertSame(70, $this->item->getRequiredLevel());
	}

	public function test_getItemLevel()
	{
		$this->assertSame(70, $this->item->getItemLevel());
	}

	public function test_getBonusAffixes()
	{
		$this->assertSame(0, $this->item->getBonusAffixes());
	}
} 