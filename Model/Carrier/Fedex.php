<?php

declare(strict_types=1);

namespace GroomerShop\ShippingCarriers\Model\Carrier;

use Magento\Shipping\Model\Carrier\CarrierInterface;

class Fedex extends AbstractCarrier implements CarrierInterface
{
    protected string $_code = 'carrier_fedex';
}