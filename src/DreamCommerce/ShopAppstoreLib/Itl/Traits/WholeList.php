<?php

namespace DreamCommerce\ShopAppstoreLib\Itl\Traits;

use DreamCommerce\ShopAppstoreLib\Itl\Client;

trait WholeList {
    public function getWholeList($grabRowCallback = null)
    {
        return Client::getWholeList($this, $grabRowCallback);
    }
}