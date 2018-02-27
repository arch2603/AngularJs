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


if(isset($data->task))
{
    $task = $data->task;
    //echo $task."\n";
    if(isset($data->updates))
    {
        $updates = $data->updates;
        print_r($updates);
    }
}

 else {
    die();
}
//print_r("\n".$task."\n");

//print_r($task);
switch ($task)
{
    case 'fetchAllData':
        $text = $db->query("SELECT * FROM header")->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($text);
        //print_r($customer);
        break;

    case "upDate":
        $h_id;
        $company;
        $title;
        $author;
        $doc_id;
        $rev_num;
        $date;
        //$sql = "INSERT INTO `onepoint_proposal`.`texts` (`userid`, `text`, `date`) VALUES ($userid, $texts, $date)";
        $details = $db->prepare("INSERT INTO `onepoint_proposal`.`header`(`title`, `author`, `revision_num`,`date_revise`, `doc_id`, `company_name`) VALUES (:title, :author, :revision_num, :_date, :doc_id, :company_name)");
        //binding data from url to database records
        //$h_id = 1;
        $company = $updates[0]->com;
        $title = $updates[1]->tit;
        $author = $updates[2]->auth;
        $doc_id = $updates[3]->docid;
        $rev_num = $updates[4]->rev_num;
        $date = '2017-06-22 13:45:00';
        //echo("\nline 59\n");


        $details->bindParam(':title',$title);
        $details->bindParam(':author',$author);
        $details->bindParam(':revision_num',$rev_num);
        $details->bindParam(':_date',$date);
        $details->bindParam(':doc_id',$doc_id);
        $details->bindParam(':company_name',$company);

        $details->execute();
        break;

    case "fetchData":


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

    case "UpdateCompTitle":
        $comp_name;
        $header_id;
        //print_r($task);
        //echo "line 92 interchange";
        $sql = "UPDATE `onepoint_proposal`.`header` SET `company_name` = :company_name WHERE `h_id`= :h_id";

        $comp_name = $updates->CompTitle;
        $header_id = $updates->ID;
        $details = $db->prepare($sql);
        $details->bindParam(':h_id',$header_id);
        $details->bindParam(':company_name',$comp_name);
        $details->execute();
        break;

    case "UpdatePropTitle":
        $title;
        $header_id;
        //print_r($task);
        //echo "line 92 interchange";
        $sql = "UPDATE `onepoint_proposal`.`header` SET `title` = :title WHERE `h_id`= :h_id";

        $title = $updates->proj_title;
        $header_id = $updates->id;
        $details = $db->prepare($sql);
        $details->bindParam(':title',$title);
        $details->bindParam(':h_id',$header_id);
        $details->execute();
        break;

    case "UpdateAuthor":
        $author;
        $header_id;
        //print_r($task);
        //echo "line 92 interchange";
        $sql = "UPDATE `onepoint_proposal`.`header` SET `author` = :author WHERE `h_id`= :h_id";

        $author = $updates->prop_author;
        $header_id = $updates->id;
        $details = $db->prepare($sql);
        $details->bindParam(':author',$author);
        $details->bindParam(':h_id',$header_id);
        $details->execute();
        break;

    case "UpdateDocId":
        $doc_id;
        $header_id;
        //print_r($task);
        //echo "line 92 interchange";
        $sql = "UPDATE `onepoint_proposal`.`header` SET `doc_id` = :doc_id WHERE `h_id`= :h_id";

        $doc_id = $updates->doc_id;
        $header_id = $updates->id;
        $details = $db->prepare($sql);
        $details->bindParam(':doc_id',$doc_id);
        $details->bindParam(':h_id',$header_id);
        $details->execute();
        break;

    case "UpdateRevNum":
        $r_num;
        $header_id;
        //print_r($task);
        //echo "line 92 interchange";
        $sql = "UPDATE `onepoint_proposal`.`header` SET `revision_num` = :rev_num WHERE `h_id`= :h_id";

        $r_num = $updates->r_num;
        $header_id = $updates->id;
        $details = $db->prepare($sql);
        $details->bindParam(':rev_num',$r_num);
        $details->bindParam(':h_id',$header_id);
        $details->execute();
        break;

    case "deactivateCustomer":

        break;

    case "updateCustomer":

        break;

}



?>