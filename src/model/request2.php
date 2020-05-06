<?php

class item
{
    private $itemId;
    private $itemName;
    private $itemType;
    private $itemDescription;
    private $itemSpecification;
    private $itemPrice;
    private $itemStock;

    public function __construct($itemId, $itemName, $itemType, $itemDescription, $itemSpecification, $itemPrice, $item_Stock)
    {
        $this->itemId = $itemId;
        $this->itemName = $itemName;
        $this->itemType = $itemType;
        $this->itemDescription = $itemDescription;
        $this->itemSpecification = $itemSpecification;
        $this->itemPrice = $itemPrice;
        $this->itemStock = $this->itemStock;
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
        $this->orderItemId=$orderItemId;
        $this->orderId=$orderId;
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



