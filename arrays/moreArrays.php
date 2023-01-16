<?php
$web_development = [
    'frontend' => [],
    'backend' => []
];

$web_development['frontend'][]='xhtml';
$web_development['backend'][]='ruby on rails';
$web_development['frontend'][]='css';
$web_development['frontend'][]='flash';
$web_development['frontend'][]='javascript';
$web_development['frontend'][0]='html';
array_splice($web_development['frontend'],2,1);

echo '<pre>';
print_r($web_development);
echo '</pre>';