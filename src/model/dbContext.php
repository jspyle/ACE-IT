<?php

include_once 'request.php';

class dbContext
{
    private  $db_server = 'proj-mysql.uopnet.plymouth.ac.uk';
    private  $dbUser = 'PRCO204_H';
    private $dbPassword = 'S6qYB7BMQ0YurT43';
    private $dbDatabase = 'PRCO204_H';
    private  $dataSourceName;
    private $connection;

    public function __construct(PDO $connection = null)
    {
        $this->connection = $connection;
        try {
            if ($this->connection === null) {
                $this->dataSourceName = 'mysql:dbname=' . $this->dbDatabase . ';host=' . $this->db_server;
                $this->connection = new PDO($this->dataSourceName, $this->dbUser, $this->dbPassword);
                $this->connection->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );
            }
        }catch (PDOException $err)
        {
            echo 'Connection failed: ', $err->getMessage();
        }
    }





    public function getTimeslot()
    {
        $sql = "SELECT * FROM `timetable_info`";


        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        $timetables = [];
        if ($resultSet) {
            foreach ($resultSet as $row) {
                $timetable = new timeTableInfo($row['Timeslot_Id'], $row['Timeslot_Description']);
                $timetables[] = $timetable;
            }
        }
        return $timetables;
    }

    public function getProductDisplay($type)
    {

        $sql = "SELECT * FROM `item` WHERE `item_type`= '".$type."'";

        //$sql = "SELECT * FROM `item` WHERE `Display` = \"1\" AND `Food_Drink` LIKE '".$type."'";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        $products = [];
        if ($resultSet) {
            foreach ($resultSet as $row) {
                $product = new item($row['Item_Id'], $row['Item_Name'], $row['Item_Type'], $row['Item_Description'], $row['Item_Specification'], $row['Item_Price'], $row['Item_Stock']);
                $products[] = $product;
            }
        }
        return $products;
    }

    public function getCustomerOrder($customerID)
    {
        $sql = "SELECT * FROM `customer_order` WHERE `Customer_Id`= '".$customerID."'";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        $customerOrder = [];
        if ($resultSet) {
            foreach ($resultSet as $row) {
                $order = new customerOrder($row['Order_Id'], $row['Customer_Id'], $row['Delivery_Id'], $row['Date_Placed'], $row['Status_Code']);
                $customerOrder[] = $order;
            }
        }
        return $customerOrder;
    }

    public function getCustomerInfo($customerID)
    {
        $sql = "SELECT * FROM `customer` WHERE `Customer_Id`= '".$customerID."'";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        $customer = [];
        if ($resultSet) {
            foreach ($resultSet as $row) {
                $cust = new customer($row['Customer_Id'], $row['Customer_Name'], $row['Customer_Address'], $row['Customer_Postcode'], $row['Customer_Email'], $row['Customer_Password']);
                $customer[] = $cust;
            }
        }
        return $customer;
    }

    public function getDelivery($deliveryId)
    {
        $sql = "SELECT * FROM `delivery` WHERE `Delivery_Id`= '".$deliveryId."'";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);


        $delivery = [];
        if ($resultSet) {
            foreach ($resultSet as $row) {
                $deliveryInfo = new delivery($row['Delivery_Id'], $row['Delivery_Date'], $row['Timeslot_Id']);
                $delivery[] = $deliveryInfo;
            }
        }
        return $delivery;
    }

// Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:76.0) Gecko/20100101 Firefox/76.0192.168.0.101

    public function getBasket($customerId)
    {

        $sql = "SELECT DISTINCT(`Item_Id`), `Item_Name` , `Item_Description`, `Item_Price` FROM `basket` WHERE `Temp_Customer`= '".$customerId."'";


        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        $baskets = [];
        if ($resultSet) {
            foreach ($resultSet as $row) {
                $basket = new basket($row['Item_Id'], $row['Item_Name'], $row['Item_Description'], $row['Item_Price'], $row['Item_Price'], $row['Temp_Customer']);
                $baskets[] = $basket;
            }
        }
        return $baskets;
    }

    public function getOrderInfo($customerID)
    {

        $sql = "SELECT customer_order.Order_Id, customer_order.Customer_Id, customer_order.Date_Placed, order_status.Status_Description, delivery.Delivery_Date, timetable_info.Timeslot_Description
                FROM customer_order, order_status, delivery, timetable_info
                WHERE (customer_order.Delivery_Id = delivery.Delivery_Id) AND (customer_order.Status_Code = order_status.Status_Code) AND (delivery.Timeslot_Id = timetable_info.Timeslot_Id) AND (customer_order.Customer_Id = '".$customerID."')";


        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        $orderInfoArray = [];
        if ($resultSet) {
            foreach ($resultSet as $row) {
                $orderInfo = new orderPageInfo($row['Order_Id'], $row['Customer_Id'], $row['Date_Placed'], $row['Status_Description'], $row['Delivery_Date'], $row['Timeslot_Description']);
                $orderInfoArray[] = $orderInfo;
            }
        }
        return $orderInfoArray;
    }


    public function basketInput($basket)
    {
        $sql = "CALL Basket_IN(:Item_Id_IN, :Item_Name_IN, :Item_Description_IN, :Item_Price_IN, :Temp_Customer_IN, :Option_IN)";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':Item_Id_IN', $basket->getItemId(), PDO::PARAM_STR);
        $statement->bindParam(':Item_Name_IN', $basket->getItemName(), PDO::PARAM_STR);
        $statement->bindParam(':Item_Description_IN', $basket->getItemDescription(), PDO::PARAM_STR);
        $statement->bindParam(':Item_Price_IN', $basket->getItemPrice(), PDO::PARAM_STR);
        $statement->bindParam(':Temp_Customer_IN', $basket->getTempCust(), PDO::PARAM_STR);
        $statement->bindParam(':Option_IN', $basket->getOption(), PDO::PARAM_INT);
        $basket = $statement->execute();

        return $basket;

    }


    public function newUser($user)
    {
        $sql = "CALL Customer_IN(:Customer_ID_IN, :Customer_Name_IN, :Customer_Address_IN, :Customer_Postcode_IN, :Customer_Email_IN, :Customer_Password_IN)";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':Customer_ID_IN', $user->getCustomerId(), PDO::PARAM_INT);
        $statement->bindParam(':Customer_Name_IN', $user->getCustomerName(), PDO::PARAM_STR);
        $statement->bindParam(':Customer_Address_IN', $user->getCustomerAddress(), PDO::PARAM_STR);
        $statement->bindParam(':Customer_Postcode_IN', $user->getCustomerPostcode(), PDO::PARAM_STR);
        $statement->bindParam(':Customer_Email_IN', $user->getCustomerEmail(), PDO::PARAM_STR);
        $statement->bindParam(':Customer_Password_IN', $user->getCustomerPassword(), PDO::PARAM_STR);
        $user = $statement->execute();

        return $user;

    }

    public function delivery($delivery)
    {
        $sql = "CALL Delivery_IN(:Delivery_Id_IN, :Delivery_Date_IN, :Timeslot_Id_IN)";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':Delivery_Id_IN', $delivery->getDeliveryId(), PDO::PARAM_INT);
        $statement->bindParam(':Delivery_Date_IN', $delivery->getDeliveryDate(), PDO::PARAM_STR);
        $statement->bindParam(':Timeslot_Id_IN', $delivery->getTimeslotId(), PDO::PARAM_INT);
        $delivery = $statement->execute();

        return $delivery;

    }

    public function customerOrder($customerOrder)
    {
        $sql = "CALL Customer_Order_IN(:Order_Id_IN, :Customer_Id_IN, :Delivery_Id_IN, :Date_Placed_IN, :Status_Code_IN)";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':Order_Id_IN', $customerOrder->getOrderId(), PDO::PARAM_INT);
        $statement->bindParam(':Customer_Id_IN', $customerOrder->getCustomerId(), PDO::PARAM_STR);
        $statement->bindParam(':Delivery_Id_IN', $customerOrder->getDeliveryId(), PDO::PARAM_INT);
        $statement->bindParam(':Date_Placed_IN', $customerOrder->getDatePlaced(), PDO::PARAM_STR);
        $statement->bindParam(':Status_Code_IN', $customerOrder->getStatusCode(), PDO::PARAM_INT);
        $customerOrder = $statement->execute();

        return $customerOrder;

    }

    public function orderItemIn($orderItemIn)
    {
        $sql = "CALL Order_Item_IN(:Order_Item_Id_IN, :Order_Id_IN, :Item_Id_IN, :Quantity_IN)";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':Order_Item_Id_IN', $orderItemIn->getOrderItemId(), PDO::PARAM_INT);
        $statement->bindParam(':Order_Id_IN', $orderItemIn->getOrderId(), PDO::PARAM_INT);
        $statement->bindParam(':Item_Id_IN', $orderItemIn->getItemId(), PDO::PARAM_STR);
        $statement->bindParam(':Quantity_IN', $orderItemIn->getQuantity(), PDO::PARAM_INT);
        $orderItemIn = $statement->execute();

        return $orderItemIn;

    }





    public function getNextCustomerId()
    {
        $sql="SELECT MAX(Customer_Id) FROM customer ORDER BY Customer_Id DESC ";
        $order = $this->connection->prepare($sql);
        $order->execute();
        $resultSet = $order->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultSet as $row){
            $result = $row['MAX(Customer_Id)'];
        }
        return ($result +1);

    }

    public function getNextDeliveryId()
    {
        $sql="SELECT MAX(Delivery_Id) FROM delivery ORDER BY Delivery_Id DESC";
        $order = $this->connection->prepare($sql);
        $order->execute();
        $resultSet = $order->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultSet as $row){
            $result = $row['MAX(Delivery_Id)'];
        }
        return ($result +1);

    }

    public function getNextOrderId()
    {
        $sql="SELECT MAX(Order_Id) FROM customer_order ORDER BY Order_Id DESC";
        $order = $this->connection->prepare($sql);
        $order->execute();
        $resultSet = $order->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultSet as $row){
            $result = $row['MAX(Order_Id)'];
        }
        return ($result +1);

    }

    public function getNextOrderItemId()
    {
        $sql="SELECT MAX(Order_Item_Id) FROM order_item ORDER BY Order_Item_Id DESC";
        $order = $this->connection->prepare($sql);
        $order->execute();
        $resultSet = $order->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultSet as $row){
            $result = $row['MAX(Order_Item_Id)'];
        }
        return ($result +1);

    }










    public function enterCustomerRequest($customer)
    {
        $sql = "CALL EnterCustomer(:Customer_Id, :Name, :Email)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':Customer_Id', $customer->getCustomerId(), PDO::PARAM_INT);
        $statement->bindParam(':Name', $customer->getName(), PDO::PARAM_STR);
        $statement->bindParam(':Email', $customer->getEmail(), PDO::PARAM_INT);

        $customer = $statement->execute();

        return $customer;

    }
    public function getNextCustomerIad()
    {
        $sql="SELECT MAX(Customer_Id) FROM customer ORDER BY Customer_Id DESC ";
        $order = $this->connection->prepare($sql);
        $order->execute();
        $resultSet = $order->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultSet as $row){
            $result = $row['MAX(Customer_Id)'];
        }
        return ($result +1);

    }
    public function getNextOsdrderId()
    {

        $sql="SELECT MAX(Order_Id) FROM customer_order ORDER BY Order_Id DESC ";
        $order = $this->connection->prepare($sql);
        $order->execute();
        $resultSet = $order->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultSet as $row){
            $result = $row['MAX(Order_Id)'];
        }
        return ($result +1);

    }
    public function enterItemRequest($itemDetails)
    {
        $sql = "CALL EnterItem(:Item_Id, :Order_Id, :Product_Id, :Quantity)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(':Item_Id', $itemDetails->getItemId(), PDO::PARAM_INT);
        $statement->bindParam(':Order_Id', $itemDetails->getOrderId(), PDO::PARAM_INT);
        $statement->bindParam(':Product_Id', $itemDetails->getProductId(), PDO::PARAM_INT);
        $statement->bindParam(':Quantity', $itemDetails->getQuantity(), PDO::PARAM_INT);

        $itemDetails = $statement->execute();

        return $itemDetails;

    }

    public function callCurrentOrder(){
        $sql="SELECT item_details.Item_Id,product.Product_Id, product.Product_Name,product.Price, item_details.Quantity FROM `item_details`, `product` WHERE `Order_Id` = ".getCustomerOrder()." AND product.Product_Id = item_details.Product_Id";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $selectedOrderSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        $itemsToAmend = [];
        if ($selectedOrderSet) {
            foreach ($selectedOrderSet as $row) {
                $itemAmend = new amendOrder($row['Item_Id'], $row['Product_Id'], $row['Product_Name'], $row['Price'], $row['Quantity']);
                $itemsToAmend[] = $itemAmend;
            }
        }
        return $itemsToAmend;

    }

}

