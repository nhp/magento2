<?php
/**
 * Created by PhpStorm.
 * User: nhp
 * Date: 5/20/17
 * Time: 2:52 PM
 */

namespace Magento\InventoryApi\Api\Data;


interface SourceCarrierLinkInterface
{

    public function setCarrierLinks(\Magento\InventoryApi\Api\Data\SourceCarrierLinkInterface $carrierLinks);

    public function getCarrierLinks();
}