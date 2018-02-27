<?php
ini_set("display_errors" , 255);
require_once("../../includes/dbconcredentials.php");

date_default_timezone_set("Australia/Brisbane");

// Connect to the DB
try {
    $db = new PDO(DB_SERVER, DB_USER, DB_PASS);
} catch (PDOException $e) {
    die( $e->getMessage() );
}

// execute the request
$data = json_decode(file_get_contents("php://input"));

//$delcustomer;
//print_r($data);
if(isset($data->task))
{
    $task = $data->task;
    //echo $task."\n";
    if(isset($data->addtexts))
    {
        $datatext = $data->addtexts;
        //print_r($datatext);
    }
}

 else {
    die();
}
//print_r($task);
switch ($task)
{
    case 'getTexts':
        $text = $db->query("SELECT * FROM inv_texts")->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($text);
        //print_r($customer);
        break;

    case "addText":
        $text = $datatext->para;
        $userid = "tash006";
        $date = "2017-06-01";

        //$sql = "INSERT INTO `onepoint_proposal`.`texts` (`userid`, `text`, `date`) VALUES ($userid, $texts, $date)";
        $details = $db->prepare("INSERT INTO `onepoint_proposal`.`inv_texts`(`userid`, `text`, `date`) VALUES (:userid, :text, :date)");
        //binding data from url to database records
        $details->bindParam(':userid',$userid);
        $details->bindParam(':text',$text);
        $details->bindParam(':date',$date);
        $details->execute();
        break;

    case "postChange":

        $text = $datatext;
        $userid = "tash006";
        $date = "2017-06-14";
        $textid = "16";
        //$icon;
        //$bullettitle;

        $sql = "UPDATE `onepoint_proposal`.`inv_texts` SET `userid` = :userid, `text` = :text, `date` = :date WHERE `textid` = :textid";
        $details = $db->prepare($sql);
        //binding data from url to database records
        $details->bindParam(':textid',$textid);
        $details->bindParam(':userid',$userid);
        $details->bindParam(':text',$text);
        $details->bindParam(':date',$date);
        //$details->bindParam(':icon',$icon);
        //$details->bindParam(':bullet_title',$bullettitle);
        $details->execute();
        break;

    case "upDateSumInv":
        $item1;
        $item2;
        $item3;
        $item4;
        $icon;

        $sql = "UPDATE `onepoint_proposal`.`inv_summary` SET `item1` = :item1, `item2` = :item2, `item3` = :item3, `item4` = :item4, `icon` = :icon";
        $details = $db->prepare($sql);

        $details->bindParam(':item1',$item1);
        $details->bindParam(':item2',$item2);
        $details->bindParam(':item3',$item3);
        $details->bindParam(':item4',$item4);
        $details->bindParam(':icon',$icon);

        $details->execute();
        break;

    case "deactivateCustomer":

        break;

    case "updateCustomer":

        break;

}



?>