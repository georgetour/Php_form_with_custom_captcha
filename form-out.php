<?php
include "form-in.php";

//First we store the values we get to variables
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$phone = (int)$_POST['phone'];
$age = (int)$_POST['age'];
$captcha = $_POST['captcha'];

//Lets make a flag so if the value is 1 the form won't be submitted if 0 everything went ok
$flag=1;

//Allow only letters ans space for name and last name
if(!preg_match("/^[a-zA-Z ]*$/",$name)||(!preg_match("/^[a-zA-Z ]*$/",$lastName) )){
    echo "In name and last name only letters and spaces are allowed.";

}


//Phone check
if(is_int($phone)&&(!empty($phone))){
   echo "You gave integer<br>";
    $flag=0;
}
else {
    echo "You didn't give integer<br>";
    $flag=1;
}

if((strlen($phone)>=5) && (strlen($phone)<=10)) {
    echo "Phone is between 5-10 characters<br>";
    $flag=0;
}
else{
   echo 'Phone isn't between 5-10 characters<br>';
    $flag=1;
}
//End phone check

//Age check
if((is_int($age))&&($age>=10&&$age<=130)){
    echo 'The age is correct between 10-130<br>';
    $flag=0;
}
else{
    echo 'The age is not correct between 10-130<br>';
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
    echo "flag variable =".$flag";
}
else{
    echo "Form wasn't submitted<br>";
}




?>
