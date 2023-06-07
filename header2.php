<header class="header">

   <div class="flex">

      <a href="#" class="logo">CanteenPoint</a>

      <nav class="navbar">
         <a href="index.php#home">home</a>
         <a href="admin.php">Add Items</a>
         <a href="index.php#popular">Menu</a>
         <a href="index.php#review">Our Team</a>
      </nav>

      <?php

      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="mycart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>