<?php

class timeTableInfo
{
    private $timeslotId;
    private $timeslotDesc;

    public function __construct($timeslotId, $timeslotDesc)
    {
        $this->timeslotId = $timeslotId;
        $this->timeslotDesc = $timeslotDesc;
    }

    public function getTimeslotId()
    {
        return $this->timeslotId;
    }

    public function setTimeslotId($timeslotId)
    {
        $this->timeslotId = $timeslotId;
    }

    public function getTimeslotDesc()
    {
        return $this->timeslotDesc;
    }

    public function setTimeslotDesc($timeslotDesc)
    {
        $this->timeslotDesc = $timeslotDesc;
    }
}
class customer
{
    private $customerId;
    private $customerName;
    private $customerAddress;
    private $customerPostcode;
    private $customerEmail;
    private $customerPassword;

    public function __construct($customerId, $customerName,$customerAddress ,$customerPostcode ,$customerEmail ,$customerPassword)
    {
        $this->customerId = $customerId;
        $this->customerName = $customerName;
        $this->customerAddress = $customerAddress;
        $this->customerPostcode = $customerPostcode;
        $this->customerEmail = $customerEmail;
        $this->customerPassword = $customerPassword;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }

    public function getCustomerAddress()
    {
        return $this->customerAddress;
    }

    public function setCustomerAddress($customerAddress)
    {
        $this->customerAddress = $customerAddress;
    }

    public function getCustomerPostcode()
    {
        return $this->customerPostcode;
    }

    public function setCustomerPostcode($customerPostcode)
    {
        $this->customerPostcode = $customerPostcode;
    }

    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;
    }

    public function getCustomerPassword()
    {
        return $this->customerPassword;
    }

    public function setCustomerPassword($customerPassword)
    {
        $this->customerPassword = $customerPassword;
    }
}

class customerOrder
{
    private $orderId;
    private $customerId;
    private $deliveryId;
    private $datePlaced;
    private $statusCode;


    public function __construct($orderId, $customerId, $deliveryId , $datePlaced, $statusCode)
    {
        $this->orderId = $orderId;
        $this->customerId = $customerId;
        $this->deliveryId = $deliveryId;
        $this->datePlaced = $datePlaced;
        $this->statusCode = $statusCode;

    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId = $deliveryId;
    }

    public function getDatePlaced()
    {
        return $this->datePlaced;
    }

    public function setDatePlaced($datePlaced)
    {
        $this->datePlaced = $datePlaced;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

}

class delivery
{
    private $deliveryId;
    private $deliveryDate;
    private $timeslotId;

    public function __construct($deliveryId, $deliveryDate, $timeslotId)
    {
        $this->deliveryId = $deliveryId;
        $this->deliveryDate = $deliveryDate;
        $this->timeslotId = $timeslotId;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId = $deliveryId;
    }

    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
    }

    public function getTimeslotId()
    {
        return $this->timeslotId;
    }

    public function setTimeslotId($timeslotId)
    {
        $this->timeslotId = $timeslotId;
    }


}








