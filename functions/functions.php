<?php
$text = "According to a researcher at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
$textArray = explode(" ", $text);
foreach ($textArray as $ind => $word){
    echo str_shuffle($word). ' ';
} 
echo '<br><br>';

function capitalizeFirstLetter ($name){
    //return ucfirst($name);
    return mb_convert_case($name, MB_CASE_TITLE, 'UTF-8');
}

echo capitalizeFirstLetter('étienne');
echo '<br><br>';

echo date('Y');
echo '<br><br>';

echo 'Le ' . date('d/m/Y , G:i:s');
echo '<br><br>';

function Sum ($a, $b){
    if (is_numeric($a) AND is_numeric($b)) {
        echo $a + $b;
    } else {
        echo "Error: the argument is not a number.";
    }
}

Sum("a" , 5);
echo '<br><br>';

function acronym (string $characters){
    $words = explode (" ", $characters);
    foreach ($words as $word){
        echo substr(ucfirst($word),0,1);
    }
}

acronym("In code we trust!"); 
echo '<br><br>';

function replaceAE($word) {
    echo str_replace("ae","æ",$word);
}

replaceAE("caecotrophie");
echo '<br><br>';

function replaceInverseAE($word) {
    echo str_replace("æ","ae",$word);
}

replaceInverseAE("chænichthys");
echo '<br><br>';

function feedback($message, $cssClass){
    return "<div class=\"{$cssClass}\">Error: {$message}.</div>";
}

echo feedback("Incorrect email address", "error");


