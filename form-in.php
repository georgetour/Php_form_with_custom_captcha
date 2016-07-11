<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validation for Security</title>

    <style>
        .inputText{
            border: 1px solid gray;
            margin-left: 10px;
        }
        .containerForm{
            background-color: coral;
            width:400px;
            border:1px solid gray;
            border-radius: 5px;

        }

        .insideFormDiv{
            display: inline-block;

        }

        .fixedWidth{
            width: 80px;

            display: inline-block;
            text-align: right;
        }

        .submitDivs{
            margin-top: 20px;
            text-align: center;
        }

        .captcha{
            background-color: lightcyan;
            border-radius: 30%;
        }

    </style>
</head>
<body>

<div class="containerForm">
<form action="form-out.php" method="post">
    <div>Please fill the form</div>
    All fields are required <br>
    <div>
    <div class="fixedWidth">Name :</div>
       <div class="insideFormDiv"><input class="inputText" type="text" size="25" maxlength="40" name="name" required>*</div>
    </div>

    <div>
    <div class="fixedWidth">Last name :</div>
        <div class="insideFormDiv"><input class="inputText" type="text" size="25" maxlength="40" name="lastName"  required>*</div>
    </div>
    <div>
    <div class="fixedWidth">Phone :</div>
        <div class="insideFormDiv"><input class="inputText" type="text" size="25" maxlength="10" name="phone" placeholder=Integer between 5-10 characters" required>*</div>
    </div>

    <div>
    <div class="fixedWidth">Age:</div>
        <div class="insideFormDiv"><input class="inputText" type="text" size="25" maxlength="3" name="age"  placeholder="Age 10-130" required>*</div>
    </div>
    <div class="submitDivs  captcha">Captcha
    <div>What was the name of the lead actor in Terminator 2 ; </div>
        <input class="inputText" type="text" size="25" maxlength="6" name="captcha"  placeholder="ex George" required>
    </div>


    <div class="submitDivs"><input type="submit" value="Submit"></div>
</form>
<form action="form-in.php" method="post">
    <input type="submit" value="Clean">
</form>
</div>





</body>
</html>

