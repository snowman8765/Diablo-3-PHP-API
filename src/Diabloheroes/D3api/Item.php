<?php
/**
 * @author Luuk Holleman
 * @email luukholleman@gmail.com
 */

namespace Diabloheroes\D3api;

use Diabloheroes\D3api\Connector\Item as Connector;

class Item
{
    public $connector;

    private $params;

    private $region;

    public $data;

    const EU = 'eu';
    const US = 'us';
    const KR = 'kr';

    public function __construct($params, $region, $initialData = null)
    {
        $this->params = $params;
        $this->region = $region;

        if (isset($initialData))
            $this->data = $initialData;

        $this->connector = new Connector();
    }

    public function fetch()
    {
        $this->data = $this->connector->get($this->region, $this->params);

        if ($this->data != false)
            $this->data = json_decode($this->data, true);
    }

    public function getId()
    {
        return $this->data['id'];
    }

    public function getName()
    {
        return $this->data['name'];
    }

    public function getIcon()
    {
        return $this->data['icon'];
    }

    public function getDisplayColor()
    {
        return $this->data['displayColor'];
    }

    public function getTooltipParams()
    {
        return $this->data['tooltipParams'];
    }

    public function getRequiredLevel()
    {
        return $this->data['requiredLevel'];
    }

    public function getItemLevel()
    {
        return $this->data['itemLevel'];
    }

    public function getBonusAffixes()
    {
        return $this->data['bonusAffixes'];
    }

    public function getBonusAffixesMax()
    {
        return $this->data['bonusAffixesMax'];
    }

    public function getAccountBound()
    {
        return $this->data['accountBound'];
    }

    public function getTypeName()
    {
        return $this->data['typeName'];
    }

    public function getType()
    {
//        return $this->
    }
}