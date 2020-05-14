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
// Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:76.0) Gecko/20100101 Firefox/76.0192.168.0.101

    public function getBasket($customerId)
    {

        $sql = "SELECT DISTINCT(`Item_Id`),`Item_Name` , `Item_Description`, `Item_Specification`, `Item_Price` FROM `basket` WHERE `Temp_Customer`= '".$customerId."'";


        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        $baskets = [];
        if ($resultSet) {
            foreach ($resultSet as $row) {
                $basket = new basket($row['Item_Id'], $row['Item_Name'], $row['Item_Type'], $row['Item_Description'], $row['Item_Specification'], $row['Item_Price'], $row['Item_Stock']);
                $baskets[] = $basket;
            }
        }
        return $baskets;
    }


    public function basketInput($basket)
    {
        $sql = "CALL Basket_IN(:Basket_Id_IN, :Item_Id_IN, :Item_Name_IN, :Item_Description, :Item_Price_IN, :Temp_Customer)";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(':Basket_Id_IN', $basket->getBasketId(), PDO::PARAM_INT);
        $statement->bindParam(':Item_Id_IN', $basket->getItemId(), PDO::PARAM_STR);
        $statement->bindParam(':Item_Name_IN', $basket->getItemName(), PDO::PARAM_STR);
        $statement->bindParam(':Item_Description', $basket->getItemDescription(), PDO::PARAM_STR);
        $statement->bindParam(':Item_Price_IN', $basket->getItemPrice(), PDO::PARAM_STR);
        $statement->bindParam(':Temp_Customer', $basket->getTempCust(), PDO::PARAM_STR);
        $basket = $statement->execute();

        return $basket;

    }

    public function getNextBasketId()
    {

        $sql="SELECT MAX(Basket_Id) FROM basket ORDER BY Basket_Id DESC";
        $order = $this->connection->prepare($sql);
        $order->execute();
        $resultSet = $order->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultSet as $row){
            $result = $row['MAX(Basket_Id)'];
        }
        return ($result +1);

    }

    public function getQuantity()
    {

        $sql="SELECT MAX(Basket_Id) FROM basket ORDER BY Basket_Id DESC";
        $order = $this->connection->prepare($sql);
        $order->execute();
        $resultSet = $order->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultSet as $row){
            $result = $row['MAX(Basket_Id)'];
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
    public function getNextOrderId()
    {

        $sql="SELECT MAX(Order_Id) FROM order_details ORDER BY Order_Id DESC ";
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

