<?php 
//11.2 Ternary exercises

?>
<form method="get" action="unicorn.php">
    <filedset>
        <legend>Are you a human, a cat or a unicorn?</legend>
        <label for="human">Human</label>
        <input type="radio" name="what" value="human" id="human">
        <label for="cat">Cat</label>
        <input type="radio" name="what" value="cat" id="cat">
        <label for="unicorn">Unicorn</label>
        <input type="radio" name="what" value="unicorn" id="unicorn">
    </filedset>
	<input type="submit" name="submit" value="Submit">
</form>
<?php
if (isset($_GET['what'])){
    $what = $_GET['what'];
    $img1 = '<img src="https://media4.giphy.com/media/BUbMgQBShZOcMPohgn/200w.webp?cid=ecf05e470mhdo3bachkxn939jtwslrm2n9mwsiv1ossns81x&rid=200w.webp&ct=g" alt="gif of human">';
    $img2 = '<img src="https://media0.giphy.com/media/3o6Zt481isNVuQI1l6/200w.webp?cid=ecf05e47oj4rf2r3bpxttaudhan00pmqqjyslnj0svmk1usx&rid=200w.webp&ct=g" alt="gif of cat">';
    $img3 = '<img src="https://media4.giphy.com/media/j0kQJxo5mzGYb4EvWK/200.webp?cid=ecf05e477cldyalnej4vmegi0kik7tl1pdvyusa7spuqnpvu&rid=200.webp&ct=g" alt="gif of unicorn">';
    $image = ($what=='human') ? $img1 : (($what=='cat') ? $img2 : $img3);
}
echo $image;
