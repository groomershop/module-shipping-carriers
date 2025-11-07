<?php

declare(strict_types=1);

namespace GroomerShop\ShippingCarriers\Model\Carrier;

use Magento\Shipping\Model\Carrier\CarrierInterface;

class Geodis extends AbstractCarrier implements CarrierInterface
{
    protected $_code = 'carrier_geodis';

    protected $_isFixed = true;
}