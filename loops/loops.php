<?php
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $pronoun){
    $s = ($pronoun == 'He/She') ? 's' : '';
    echo $pronoun . ' code' . $s . '<br>';
}

// $i = 1;
// while ($i<= 120){
//     echo $i;
//     echo '<br>';
//     $i ++;
// }

for ($i=1;$i<=12;$i ++){
    echo $i;
    echo '<br>';
};

$staffs = ['Stéphanie','Angélique','Pierre','Laura'];

foreach ($staffs as $staff ) {
    echo $staff;
    echo '<br>';
};

$countries = [
    'BE' => 'Belgium',
    'GB' => 'England',
    'FR' => 'France',
    'IE' => 'Ireland',
    'ES' => 'Spain',
    'DE' => 'Germany',
    'LU' => 'Luxembourg',
    'IT' => 'Italy',
    'CH' => 'Switzerland'];

?>
<form>
    <select name="country">
        <?php foreach ($countries as $ISO => $country){ 
            echo "<option value=\"{$ISO}\">{$country}</option>"; 
        };
        ?>  
    </select>
</form>