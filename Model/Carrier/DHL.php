<?php

declare(strict_types=1);

namespace GroomerShop\ShippingCarriers\Model\Carrier;

use Magento\Shipping\Model\Carrier\CarrierInterface;

class DHL extends AbstractCarrier implements CarrierInterface
{
    protected string $_code = 'carrier_dhl';

    protected bool $_isFixed = true;
}