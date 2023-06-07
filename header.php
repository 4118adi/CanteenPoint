<header>
    <a href="https://www.gsfcuni.edu.in/" target="_main"><img src="images/icon.png" alt=""></a>
    <a href="https://www.gsfcuni.edu.in/" class="logo">GSFC University</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="index.php#home">home</a>
        <a href="admin.php">Add Items</a>
        <a href="index.php#popular">Menu</a>
        <a href="index.php#review">Our Team</a>
        <?php
        $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
        $count = mysqli_num_rows($select_rows);
        ?>
        <a href="mycart.php">Cart(<?php echo $count ?>)</a>
    </nav>

</header>