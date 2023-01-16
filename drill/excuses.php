<!--//Fake Excuse Notes Generator-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excuses</title>
    <link rel="stylesheet" href="./assets/style.css"/>
</head>
<body>
    <form method="post" action="excuses.php">
    <label for="name">Name of the child:</label>
    <input type="text" id="name" name="name"><br>

    <label for="gender">Gender of the child:</label>
    <select id="gender" name="gender">
        <option value="girl">Girl</option>
        <option value="boy">Boy</option>
    </select><br>

    <label for="teacher">Name of the teacher:</label>
    <input type="text" id="teacher" name="teacher"><br>

    <label>Reason for absence:</label><br>
    <input type="radio" id="illness" name="reason" value="illness">
    <label for="illness">Illness</label>

    <input type="radio" id="death" name="reason" value="death">
    <label for="death">Death of a family member</label>

    <input type="radio" id="activity" name="reason" value="activity">
    <label for="activity">Extra-curricular activity</label>

    <input type="radio" id="travel" name="reason" value="travel">
    <label for="travel">School travel</label>

    <input type="submit" name="submit" value="Submit">

    </form> 

<?php

if (isset($_POST['name'], $_POST['gender'], $_POST['teacher'], $_POST['reason'])){
    $today = date('d/m/y');
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $theGender = ($gender=='boy') ? "mon fils" : "ma fille";
    $teacher = $_POST['teacher'];
    $reason = $_POST['reason'];
    switch ($reason){
        case 'illness' :
            $theReason = 'pour raison médicale';
            break;
        case 'death' :
            $theReason = 'pour cause d’un décès dans notre famille';
            break;
        case 'activity' :
            $theReason = 'pour cause d’activité extra-scolaire';
            break;
        case 'travel' :
            $theReason = 'pour cause de voyage scolaire';
            break;
    } 
    echo "<div class=\"letter\">
    <p class=\"letter_date\">Le {$today}</p>
    <p class=\"letter_teacher\"> A l’attention de {$teacher}</p>
    <p class=\"letter_p\">Madame, Monsieur,</p>  
    <p class=\"letter_p\">Je vous prie de bien vouloir excuser l’absence de {$theGender} {$name}.</p>
    <p class=\"letter_p\">En effet, il n’a pas pu fréquenter le cours des Beaux-arts de vendredi dernier {$theReason}.</p>
    <p class=\"letter_p\">Je vous saurais gré d’en prendre note et m’en remets à votre compréhension.</p>
    <p class=\"letter_p\">Je vous prie de croire à l’assurance de mes salutations les plus sincères.</p>
    </div>";
}
?>
</body>

