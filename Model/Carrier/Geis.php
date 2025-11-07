<?php

declare(strict_types=1);

namespace GroomerShop\ShippingCarriers\Model\Carrier;

use Magento\Shipping\Model\Carrier\CarrierInterface;

class Geis extends AbstractCarrier implements CarrierInterface
{
    protected $_code = 'carrier_geis';

    protected $_isFixed = true;
}