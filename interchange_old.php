<?php
ini_set("display_errors" , 255);
require_once("../includes/dbconcredentials.php");

date_default_timezone_set("Australia/Brisbane");

// Connect to the DB
try {
    $db = new PDO(DB_SERVER, DB_USER, DB_PASS);
} catch (PDOException $e) {
    die( $e->getMessage() );
}
// execute the request
$data = json_decode(file_get_contents("php://input"));

if(isset($data->task)) {
    $task = $data->task;
    if(isset($data->addcustomer)){
        //echo("line 21");
        $customer = $data->addcustomer;
    }
    //deleting customer form the database
    if(isset($data->delcustomer)){
        $delcustomer = $data->delcustomer;

    }
    //deactivating customer from the database
    if(isset($data->deactivatecustomer)){
        $deactcustomer = $data->deactivatecustomer;
        //print_r($data);
    }
} else {
    $task = $_POST['task'];
}

switch ($task) {

    case 'sendFeedback':
        $feedback = $data->feedback;
        // Send the email
        //require_once($_SERVER['DOCUMENT_ROOT'] . '/PHPMailer_v5.1/class.phpmailer.php');
        $mail = new PHPMailer();
        $mail->IsSendmail();
        $mail->SetFrom("feedback@quotes.onepointsoftware.com.au","OnePoint Quotes");
        $mail->AddAddress("michael@onepointsolutions.com.au", "Michael");
        $mail->AddAddress("rob@onepointsolutions.com.au", "Rob");
        $mail->AddAddress("natasha@onepointsolutions.com.au", "Natasha");
        $mail->Subject = "Feedback from Recyclers Australia";
        $body = '<p style="font-weight: bold">Here is some feedback from a quote:</p>';
        $body .= "<p>$feedback</p>";
        $mail->MsgHTML($body);
        $mail->Send();

        echo "Sent!";
        break;

    case 'acceptProposal':
        $TheName = $data->TheName;
        $TheDate = $data->TheDate;
        $ThePosition = $data->ThePosition;
        $estimatorApp = $data->estimatorApp;
        // Send the email
        require_once($_SERVER['DOCUMENT_ROOT'] . '/PHPMailer_v5.1/class.phpmailer.php');
        $mail = new PHPMailer();
        $mail->IsSendmail();
        $mail->SetFrom("accept@quotes.onepointsoftware.com.au","OnePoint Quotes");
        $mail->AddAddress("michael@onepointsolutions.com.au", "Michael");
        $mail->AddAddress("rob@onepointsolutions.com.au", "Rob");
        $mail->AddAddress("natasha@onepointsolutions.com.au", "Natasha");
        $mail->Subject = "Accepted Quote from Recyclers Australia!";
        $body = '<p style="font-weight: bold">Quote was accepted:</p>';
        $body .= "<p>Accepted by: $TheName</p>";
        $body .= "<p>Accepted on: $TheDate</p>";
        $body .= "<p>Position: $ThePosition</p>";
        $body .= "<p>Estimator App option selected: $estimatorApp</p>";
        $mail->MsgHTML($body);
        $mail->Send();

        echo "Accepted!";
        break;

    case 'rejectProposal':
        mail("michael@onepointsolutions.com.au", "Recyclers Australia rejected our quote", "Fuck it!");
        mail("rob@onepointsolutions.com.au", "Recyclers Australia rejected our quote", "Fuck it!");
        mail("natasha@onepointsolutions.com.au", "Recyclers Australia rejected our quote", "Fuck it!");

        echo "Rejected!";
        break;

    case "hello":
        //mail("michael@onepointsolutions.com.au", "Rochele Painting viewed our quote", "");

        // Send the email
        require_once($_SERVER['DOCUMENT_ROOT'] . '/PHPMailer_v5.1/class.phpmailer.php');
        $mail = new PHPMailer();
        $mail->IsSendmail();
        $mail->SetFrom("accept@quotes.onepointsoftware.com.au","OnePoint Quotes");
        $mail->AddAddress("michael@onepointsolutions.com.au", "Michael");
        $mail->Subject = "Recyclers Australia viewed our quote";
        $body = '<p>Shapoopi</p>';
        $mail->MsgHTML($body);
        $mail->Send();
        break;
}

// -------------------------------------------------------- FUNCTIONS --------------------------------------------------
