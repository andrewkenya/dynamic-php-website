<?php
define("TITLE", "menu | Bristo");
include ("includes/header.php");?>

<div id="menu-items">
  <h1>Our Delicous Menu</h1>
  <p> Come && Enjoy!</p>
  <hr>
  <ul>
    <?php  foreach($menuItems as $dish => $item) {?>
       <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item["title"]; ?></a><sup>$</sup>
       <?php echo $item["price"];?></li>

       <?php } ?>
  </ul>
</div>
<?php
include ("includes/footer.php");
?>
