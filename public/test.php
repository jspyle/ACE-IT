<?php
include_once '../src/model/dbContext.php';
include_once '../src/model/request.php';

if(!isset($db))
{
    $db = new dbContext();
}
?>

<html>

<h1>
    Test
</h1>
<?php
$optionString = "";
$times = $db->getTimeslot();
$className = 1;

    if($times)
    {
        foreach($times as $time)
        {
            $listTime.="<div class=item\".$className.\">"."<h5 id=timeslotId>".$time->getTimeslotId()."</h5>"."<div class=item\".$className.\">"."<h5 id=timeslotDesc>".$time->getTimeslotDesc()."</h5>";
            $className += 1;
        }
    }

    echo $listTime


?>

</html>
