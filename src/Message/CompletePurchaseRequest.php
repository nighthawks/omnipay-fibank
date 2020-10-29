<?php

namespace Ampeco\OmnipayFibank\Message;

use Omnipay\Common\Message\ResponseInterface;

class CompletePurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        return [];
    }
    
    /**
     * Send the request with specified data
     *
     * @param mixed $data The data to send
     * @return ResponseInterface
     */
    public function sendData($data)
    {
        return $this->createResponse([], true, []);
    }
}
