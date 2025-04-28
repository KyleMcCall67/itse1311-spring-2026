<?php

if (isset($_POST)  && $_POST['submit'] != '') {

include('connection.php');

include('upload.php');

$conn->autocommit(FALSE);

try {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $url = $_POST['url'];
        $startDate = $_POST['startDate'];
        $tShirt = $_POST['tShirt'];
        $color = $_POST['color'];
        $participation = $_POST['participation'];
        $timeOfDay = $_POST['timeOfDay'];

        $all_timeOfDay = '';
        $comma = '';

            if (is_array($timeOfDay)) {
                foreach($timeOfDay as $timeOfDays) {
                    $all_timeOfDay = $all_timeOfDay . $comma . $timeOfDays;
                    $comma = ',';
                }
            }

            echo $all_timeOfDay;
            //exit;

        $aboutYou = $_POST['aboutYou'];
        $terms = $_POST['terms'];







////////////begin insert for contacts////////
//insert into database
$sql = "INSERT INTO contacts (
firstName,
lastName,
age,
email,
phone,
guid
) VALUES (
'$firstName',
'$lastName',
'$age',
'$email',
'$phone',
'$form_id'
)";

    if ($conn->query($sql) === TRUE) {

        $last_id = $conn->insert_id;
        echo "New record entered";
    }
    else {
        throw new Exception('Could not insert into contacts table');
        "Error: " . $sql . $conn->error;
    }
//////////////end insert for contacts///////////////




 ////////////begin insert for preferences////////
//insert into database
$sql = "INSERT INTO preferences (
    url,
    startDate,
    tShirt,
    color,
    participation ,
    timeOfDay,
    aboutYou,
    terms,
    document,
    contacts_record_id,
    guid
    ) VALUES (
    '$url',
    '$startDate',
    '$tShirt',
    '$color',
    '$participation',
    '$all_timeOfDay',
    '$aboutYou',
    '$terms',
    '$dbFileName',
    '$last_id',
    '$form_id'
    )";
    
        if ($conn->query($sql) === TRUE) {
            echo "New record entered";
        }
        else {
            throw new Exception('Could not insert into preferences table');
            "Error: " . $sql . $conn->error;
        }
    //////////////end insert for preferences///////////////

        //commit transaction
        $conn->commit();

        

} //try
catch(Exception $e) {
    //cancel the transaction
    $conn->rollback();
    echo $e->getMessage();
}





$conn->close();


} // came from post
else {
    echo "Please fill out the form";
}