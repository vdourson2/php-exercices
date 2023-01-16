<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 



$room_is_filthy = true;

if( !$room_is_filthy ){
	echo "Yuk, Room is dirty : let's clean it up !";
	//cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.<br>________________________<br><br>";
}

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[1]; 

if($room_filthiness == "health hazard"){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if($room_filthiness == $possible_states[1]){
	echo "Yuk, Room is filthy : let's clean it up !";
} else if($room_filthiness == $possible_states[2]){
	echo "Yuk, Room is dirty : let's clean it up !";
} else {
	echo "Nothing to do, room is neat.";
}
echo "<br>________________________<br><br>";

// 2. "Different greetings according to time" Exercise

$nowHour = date('Gi');
if($nowHour >= 500 AND $nowHour <= 900){
    echo 'Good morning';
} else if($nowHour>900 AND $nowHour<=1200){
    echo "Good day !";
} else if ($nowHour > 1200 AND $nowHour <= 1600){
    echo 'Good afternoon !';
} else if ($nowHour > 1600 AND $nowHour <= 2100){
    echo "Good evening !";
} else {
    echo "Good night!";
}
echo "<br>________________________<br><br>";

// 3. "Different greetings according to age" Exercise,
// and 4. Different greeting according to the user's age and gender,
// and 5. Different greeting according to the user's age, gender and mothertongue.

?>
<form method="get" action="conditions.php">
	<label for="age">Please type your age : </label>
	<input type="number" name="age" id="age">
    <filedset>
        <legend>Man or Woman?</legend>
        <label for="man">Man</label>
        <input type="radio" name="gender" value="man" id="man">
        <label for="woman">Woman</label>
        <input type="radio" name="gender" value="woman" id="woman">
    </filedset>
    <filedset>
        <legend>Do you speak English?</legend>
        <label for="true">Yes</label>
        <input type="radio" name="language" value="true" id="true">
        <label for="false">No</label>
        <input type="radio" name="language" value="false" id="false">
    </filedset>
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php

if (isset($_GET['age'], $_GET['gender'], $_GET['language'])){
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $language = $_GET['language'];
    $greetings = ($language == 'true') ? 'Hello' : 'Aloha';
    if ($age < 12){
        if ($gender == 'man'){
            echo "{$greetings} boy!";
        }
        else {
            echo "{$greetings} girl!";
        }
    } else if ($age >= 12  AND $age < 18){
        if ($gender == 'man'){
            echo "{$greetings} mister teen!";
        }
        else {
            echo "{$greetings} miss teen!";
        }
    } else if ($age >= 18  AND $age < 115){
        if ($gender == 'man'){
            echo "{$greetings} man!";
        }
        else {
            echo "{$greetings} woman!";
        }
    } else {
        echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
    }
}

echo "<br>________________________<br><br>";

//6. The Girl Soccer team

?>

<form method="get" action="conditions.php">
	<label for="name">Name : </label>
	<input type="text" name="name" id="name">
    <label for="age">Age : </label>
	<input type="number" name="age" id="age">
    <filedset>
        <legend>Gender :</legend>
        <label for="man">Man</label>
        <input type="radio" name="gender" value="man" id="man">
        <label for="woman">Woman</label>
        <input type="radio" name="gender" value="woman" id="woman">
    </filedset>
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php

if (isset($_GET['name'], $_GET['age'], $_GET['gender'])){
    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    if ($age>=21 AND $age<40 AND $gender=="woman"){
        echo "Welcome to the team {$name}";
    } else {
        echo "Sorry you don't fit the criteria {$name}";
    }
}

echo "<br>_______________________________<br><br>";

// 7. The same, without the ELSE.

?>

<form method="get" action="conditions.php">
    <label for="name">Name : </label>
	<input type="text" name="name" id="name">
    <label for="age">Age : </label>
	<input type="number" name="age" id="age">
    <filedset>
        <legend>Gender :</legend>
        <label for="man">Man</label>
        <input type="radio" name="gender" value="man" id="man">
        <label for="woman">Woman</label>
        <input type="radio" name="gender" value="woman" id="woman">
    </filedset>
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php

if (isset($_GET['name'], $_GET['age'], $_GET['gender'])){
    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $message = "Sorry you don't fit the criteria {$name}";
    if ($age>=21 AND $age<40 AND $gender=="woman"){
        $message = "Welcome to the team {$name}";
    }
    echo $message;
}

echo "<br>_______________________________<br><br>";

//8. "School sucks!" Exercise

?>

<form method="get" action="conditions.php">
    <label for="note">Note : </label>
	<input type="number" name="note" id="note">
	<input type="submit" name="submit" value="submit">
</form>

<?php

if (isset($_GET['note'],)){
    $note = $_GET['note'];
    if ($note < 4) {
        echo "This work is really bad. What a dumb kid! ";
    } else if ($note>=4 AND $note<10){
        echo "This is not sufficient. More studying is required.";
    } else if ($note == 10){
        echo "barely enough!";
    } else if ($note > 10 AND $note<15){
        echo "Not bad!";
    } else if ($note >= 15 AND $note<=18){
        echo "Bravo, bravissimo!";
    } else if ($note>=19 AND $note<=20){
        echo "Too good to be true : confront the cheater!";
    }
}



