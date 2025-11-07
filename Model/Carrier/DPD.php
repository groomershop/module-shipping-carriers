<?php

declare(strict_types=1);

namespace GroomerShop\ShippingCarriers\Model\Carrier;

use Magento\Shipping\Model\Carrier\CarrierInterface;

class DPD extends AbstractCarrier implements CarrierInterface
{
    protected $_code = 'carrier_dpd';

    protected $_isFixed = true;
}