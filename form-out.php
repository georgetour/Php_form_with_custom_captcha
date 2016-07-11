<?php
include "form-in.php";

//First we store the values we get to variables
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$phone = (int)$_POST['phone'];
$age = (int)$_POST['age'];
$captcha = $_POST['captcha'];

//Lets make a flag so if the value is 1 the form won;t be submitted if 0 everything went ok
$flag=1;

//Allow only letters ans space for name and last name
if(!preg_match("/^[a-zA-Z ]*$/",$name)||(!preg_match("/^[a-zA-Z ]*$/",$lastName) )){
    echo "Στο όνομα και στο επίθετο επιτρέπονται μόνο γράμματα και κενά διαστήματα";
}


//Phone check
if(is_int($phone)&&(!empty($phone))){
   echo "Δώσατε ακέραιο<br>";
    $flag=0;
}
else {
    echo "Δε δώσατε ακέραιο<br>";
    $flag=1;
}

if((strlen($phone)>=5) && (strlen($phone)<=10)) {
    echo "Το τηλέφωνο είναι μεταξύ 5-10 χαρακτήρων<br>";
    $flag=0;
}
else{
   echo 'Το τηλέφωνο δεν είναι μεταξύ 5-10 χαρακτήρων<br>';
    $flag=1;
}
//End phone check

//Age check
if((is_int($age))&&($age>=10&&$age<=130)){
    echo 'Η ηλικία που δώσατε είναι σωστή από 10-130<br>';
    $flag=0;
}
else{
    echo 'Η ηλικία που δώσατε δεν είναι σωστή από 10-130<br>';
    $flag=1;
}
//End age check

//Captcha
if($captcha=="Arnold"&&(!empty($captcha))){
    $flag=0;
    echo "Arnold Rocks!<br>";
}
else{
    $flag=1;
    echo "For the form to be submitted you must give the captcha<br>";
}

//Form submit or not submit checking
if($flag==0){
    echo "Form submitted<br>";
    echo "$flag";
}
else{
    echo "Form wasn't submitted<br>";
}




?>