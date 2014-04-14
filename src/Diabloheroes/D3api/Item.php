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

}