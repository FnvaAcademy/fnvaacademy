<?php

    $names  = ['firstname'=>$firstName="",'middlename'=>$middleName="",
               'lastname'=>$lastName=""];
          
    $nameErrors = ['firstNameError'=>"",'middleNameError'=>"",'lastNameError'=>""];

    if(isset($_POST['submit'])){
        echo $nameErrors['firstNameError'];
        if(!empty($_POST['firstName'])){
            $nameErrors['firstNameError'] = " please enter your fucking first name ";
        }
        else{
            $names['firstname'] = $_POST['firstName'];
        }
        if(empty($_POST['middleName'])){
            $nameErrors['middleNameError'] = " please enter your fucking middle name ";
        }
        else{
            $names['middlename'] = $_POST['middleName'];
        }
        if(empty($_POST['lastName'])){
            $nameErrors['lastNameError'] = " please enter your fucking last name ";
        }
        else{
            $names['lastname'] = $_POST['lastName'];
        }

    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="applicationForm.php" method="POST">
        <fieldset>
            <legend class="applicationCaption">Application Form</legend><br>
            <fieldset>
                <legend class="personalCaption">Personal Details</legend><br>
                
                <label for="" class="firstNameCaption">First Name</label><br>
                <input type="text" name="firstName" class="firstName" id="firstName" 
                value="<?php echo $names['firstname'] ?>"><br>
                <p class="firstNameError"><?php echo $nameErrors['firstNameError'] ?></p><br>
                
                <label for="" class="middleNameCaption">Middle Name</label><br>
                <input type="text" class="middleName" name="middleName" id="middleName"; 
                value="<?php echo $names['middlename'] ?>"><br>
                <p class="middleNameError"><?php echo $nameErrors['middleNameError'] ?></p><br>
                
                <label for="" class="lastNameCaption">Last Name</label><br>
                <input type="text" class="lastName" name="lastName" id="lastName"; 
                value="<?php echo $names['lastname'] ?>"><br>
                <p class="lastNameError"><?php echo $nameErrors['lastNameError'] ?></p><br>

                <input type="submit" class="submitBtn" name="submit" value="submit">
            </fieldset>
        </fieldset>
    </form>
    <style>
        body{
            font-weight:bold;
            font-family:arial;
        }
        .applicationCaption{
            font-weight:bolder;
            font-family:arial;
            font-size:30px;
        }
        .personalCaption{
            font-weight:bolder;
            font-family:arial;
            font-size:20px;
        }
        .firstName,.middleName,.lastName{
            height:35px;
            border:solid 2px black;
            font-weight:bold;
            text-align:center;
            width:300px;
        }
        .submitBtn{
            height:30px;
            width:100px;
            font-size:20px;
            line-height:10px;
            border:solid 2px blue;
            font-family:Arial;
            font-weight:bolder;
        }
    </style>
</body>
</html>