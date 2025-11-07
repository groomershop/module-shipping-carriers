<?php

declare(strict_types=1);

namespace GroomerShop\ShippingCarriers\Model\Carrier;

use Magento\Shipping\Model\Carrier\CarrierInterface;

class UPS extends AbstractCarrier implements CarrierInterface
{
    protected string $_code = 'carrier_ups';

    protected bool $_isFixed = true;
    
    public function getAllowedMethods(): array
    {
        return [$this->_code => $this->getConfigData('name')];
    }
}