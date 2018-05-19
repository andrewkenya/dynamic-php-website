<?php
 define("TITLE", "Menu Item | Bristo");
 include("includes/header.php");

 // learn more abt preg_replace on php.net
 function strip_bad_chars($input){
    $output = preg_replace("/[^a-z0-9_-]/", "", $input );
    return $output;
 }

 if(isset($_GET['item'])){
   $menuItem = strip_bad_chars($_GET['item']);
   $dish = $menuItems[$menuItem];

 }
 //calculate a suggested Tip
 function suggestedTip($price, $tip) {
   $totalTip = $price * $tip;
   echo money_format('%.2n', $totalTip);
 }

 
?>

<hr>
<div id="dish">
    <h1><?php echo $dish["title"]; ?> <span class="price"><sup>$</sup>
    <?php echo $dish["price"]; ?></span></h1>
    <?php echo $dish["blurb"]; ?> </p>
    <br>
    <p><strong>Suggested Beverage: <?php echo $dish["drink"] ;?></strong></p>
    <p><em>Suggested Tip: <sup>$</sup><?php suggestedTip($dish["price"], 0.20); ?></em></p>
</div>
<hr>
<a href="menu.php" class="btn btn-default">&laquo; Back to Menu</a>
<?php include('includes/footer.php');?>
