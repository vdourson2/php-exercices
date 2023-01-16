<?php
$family = ['Sébastien','Virginie','Alexandre'];
echo '<pre>';
print_r($family);
echo '</pre><br>';
var_dump($family);
echo '<br><br>';
print_r($family);
echo '<br><br>';

$films = ['Avatar, the last airbender','Dragon prince'];
echo $films[0];

$me = [
    'firstname' => 'Virginie',
    'lastname' => 'Dourson',
    'favoritecolor' => 'red',
    'likesoccer' => false,
    'age' => 45,
    'favorite_movie' => ['Avatar','Dragon prince']
];

echo '<pre>';
print_r($me);
echo '</pre>';

$me['hobbies'] = ['bushcraft','sketchnoting'];

echo '<pre>';
print_r($me);
echo '</pre>';

$aang = [
    'firstname' => 'Aang',
    'lastname' => 'Avatar',
    'favoritecolor' => 'blue',
    'likesoccer' => false,
    'age' => 15,
    'favorite_movie' => ['Avatar','Legend of Kora'],
    'hobbies' => ['airsurfing','joking around']
];

$me['favoriteCharacter']=$aang;
echo '<pre>';
print_r($me);
echo '</pre>';

echo count($me['favoriteCharacter']['hobbies']);
echo '<br>';
echo count($me['hobbies']);
echo '<br>';
echo count($me['favoriteCharacter']['hobbies']) + count($me['hobbies']);

$me['hobbies'][]='taxidermie';
echo '<pre>';
print_r($me);
echo '</pre>';

$me['lastname'] = 'Durand';
echo '<pre>';
print_r($me);
echo '</pre>';

$soulmate = [
    'firstname' => 'Him',
    'lastname' => 'TheOne',
    'favoritecolor' => 'blue',
    'likesoccer' => false,
    'age' => 45,
    'favorite_movie' => ['Thefirst','Thesecond'],
    'hobbies' => ['bushcraft','dance']
];

$possible_hobbies_via_intersection = array_intersect($me,$soulmate);
$possible_hobbies_via_merge = array_merge($me,$soulmate);

echo 'Intersection et merge';
echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';