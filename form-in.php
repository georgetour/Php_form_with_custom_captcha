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
    Όλα τα πεδία  είναι απαραίτητα <br>
    <div>
    <div class="fixedWidth">Όνομα :</div>
       <div class="insideFormDiv"><input class="inputText" type="text" size="25" maxlength="40" name="name" required>*</div>
    </div>

    <div>
    <div class="fixedWidth">Επίθετο :</div>
        <div class="insideFormDiv"><input class="inputText" type="text" size="25" maxlength="40" name="lastName"  required>*</div>
    </div>
    <div>
    <div class="fixedWidth">Τηλέφωνο :</div>
        <div class="insideFormDiv"><input class="inputText" type="text" size="25" maxlength="10" name="phone" placeholder="Ακέραιος 5-10 χαρακτήρες" required>*</div>
    </div>

    <div>
    <div class="fixedWidth">Ηλικία:</div>
        <div class="insideFormDiv"><input class="inputText" type="text" size="25" maxlength="3" name="age"  placeholder="Ηλικία 10-130" required>*</div>
    </div>
    <div class="submitDivs  captcha">Captcha
    <div>Ποιό είναι το όνομα του πρωταγωνιστή στο Terminator 2 στα Αγγλικά ; </div>
        <input class="inputText" type="text" size="25" maxlength="6" name="captcha"  placeholder="ex George" required>
    </div>


    <div class="submitDivs"><input type="submit" value="Submit"></div>
</form>
<form action="form-in.php" method="post">
    <input type="submit" value="Καθαρισμός">
</form>
</div>





</body>
</html>

