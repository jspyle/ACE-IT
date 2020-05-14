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


class item
{
    private $itemId;
    private $itemName;
    private $itemType;
    private $itemDescription;
    private $itemSpecification;
    private $itemPrice;
    private $itemStock;

    public function __construct($itemId, $itemName, $itemType, $itemDescription, $itemSpecification, $itemPrice, $itemStock)
    {
        $this->itemId = $itemId;
        $this->itemName = $itemName;
        $this->itemType = $itemType;
        $this->itemDescription = $itemDescription;
        $this->itemSpecification = $itemSpecification;
        $this->itemPrice = $itemPrice;
        $this->itemStock = $itemStock;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    public function getItemName()
    {
        return $this->itemName;
    }

    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
    }

    public function getItemType()
    {
        return $this->itemType;
    }

    public function setItemType($itemType)
    {
        $this->itemType = $itemType;
    }

    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;
    }

    public function getItemSpecification()
    {
        return $this->itemSpecification;
    }

    public function setItemSpecification($itemSpecification)
    {
        $this->itemSpecification = $itemSpecification;
    }

    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    public function getItemPriceNoOs()
    {
        return $this->itemPrice-500;
    }

    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
    }

    public function getItemStock()
    {
        return $this->itemStock;
    }

    public function setItemStock($itemStock)
    {
        $this->itemStock = $itemStock;
    }
}


class orderItem
{
    private $orderItemId;
    private $orderId;
    private $itemId;
    private $quantity;

    public function __construct($orderItemId, $orderId, $itemId, $quantity)
    {
        $this->orderItemId = $orderItemId;
        $this->orderId = $orderId;
        $this->itemId = $itemId;
        $this->quantity = $quantity;
    }

    public function getOrderItemId()
    {
        return $this->orderItemId;
    }

    public function setOrderItemId($orderItemId)
    {
        $this->orderItemId = $orderItemId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }


}


class orderStatus
{
    private $statusCode;
    private $statusDescription;

    public function __construct($statusCode, $statusDescription)
    {
        $this->statusCode = $statusCode;
        $this->statusDescription = $statusDescription;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function getStatusDescription()
    {
        return $this->statusDescription;
    }

    public function setStatusDescription($statusDescription)
    {
        $this->statusDescription = $statusDescription;
    }
}

class basket
{
    private $basketId;
    private $itemId;
    private $itemName;
    private $itemDescription;
    private $itemPrice;
    private $tempCust;

    public function __construct($basketId, $itemId, $itemName, $itemDescription, $itemPrice, $tempCust)
    {
        $this->basketId = $basketId;
        $this->itemId = $itemId;
        $this->itemName = $itemName;
        $this->itemDescription = $itemDescription;
        $this->itemPrice = $itemPrice;
        $this->tempCust =$tempCust;
    }

    public function getBasketId()
    {
        return $this->basketId;
    }

    public function setBasketId($basketId)
    {
        $this->basketId = $basketId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }
    public function getItemName()
    {
        return $this->itemName;
    }

    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
    }

    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;
    }
    public function getItemPrice()
    {
        return $this->itemPrice;
    }
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
    }
    public function getTempCust()
    {
        return $this->tempCust;
    }
    public function setTempCust($tempCust)
    {
        $this->tempCust = $tempCust;
    }


}













