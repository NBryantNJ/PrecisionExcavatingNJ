<?php
    echo $_POST['FullName'];
    echo $_POST['Email'];
    echo $_POST['PhoneNumber'];
    echo $_POST['ReasonSelected'];
    echo $_POST['AdditionalComments'];

    $msg = 'Customer Name: '.$_POST['FullName'].' 


    Customer Email: '.$_POST['Email'].' 


    Customer Phone Number: '.$_POST['PhoneNumber'].'


    Reason For Contact: '.$_POST['ReasonSelected'].'


    Additional Comments: '.$_POST['AdditionalComments'].'';
    
    mail('PrecisionExcavationNJ@gmail.com','Customer Sent You A Contact Form',$msg);

?>