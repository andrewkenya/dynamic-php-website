      <ul class="navbar-nav mr-auto">

      <?php 
      foreach($navItems as $item){
          echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
      }

      ?>
      
      </ul>


      