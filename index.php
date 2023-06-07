<?php

@include 'config.php';

if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

    if (mysqli_num_rows($select_cart) > 0) {
        $message[] = 'product already added to cart';
    } else {
        $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
        $message[] = 'product added to cart succesfully';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSFC Canteen</title>
    <!-- css link  -->

    <link rel="stylesheet" href="style.css">


    <!--Bootstrap link-->


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body style="background-color: #000000;">

    <!-- header start  -->
    <?php include 'header.php'; ?>
    <!-- header end -->

    <!-- home start  -->

    <section class="home" id="home">

        <div class="content">
            <div class="loader">
                <h3>CanteenPoint</h3>
            </div>
            <p>CanteenPoint is a management system for in-campus canteens to turn food ordering into a more convienent and efficient procedure. CanteenPoint aims to cancel out standing in lines and unnecessary rush.</p>
            <a href="#popular" class="btn">order now</a>
        </div>

        <div class="image">
            <img src="images/home-img.png" alt="">
        </div>

    </section>

    <!-- home end -->

    <!-- top picks start  -->

    <section class="speciality" id="speciality">

        <h1 class="heading"> Top <span>Picks</span> </h1>

        <div class="box-container">

            <div class="box">
                <img class="image" src="images/s-img-1.jpeg" alt="">
                <div class="content">
                    <img src="images/s-1.png" alt="">
                    <h3>masala dosa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-2.webp" alt="">
                <div class="content">
                    <img src="images/s-2.png" alt="">
                    <h3>samosas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-3.webp" alt="">
                <div class="content">
                    <img src="images/s-3.png" alt="">
                    <h3>ice-cream</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-4.webp" alt="">
                <div class="content">
                    <img src="images/s-4.png" alt="">
                    <h3>cold drinks</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-5.webp" alt="">
                <div class="content">
                    <img src="images/s-5.png" alt="" id="icon">
                    <h3>chinese</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-6.webp" alt="">
                <div class="content">
                    <img src="images/s-6.png" alt="" id="icon">
                    <h3>Pasta</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>

        </div>

    </section>

    <!--top pick end -->

    <!-- MENU start-->

    <section class="popular" id="popular">

        <h1 class="heading"> Our <span> Menu</span>!</h1>

        <div class="box-container">
            <?php

            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if (mysqli_num_rows($select_products) > 0) {
                while ($fetch_product = mysqli_fetch_assoc($select_products)) {
            ?>

                    <form action="" method="post">
                        <div class="box">
                            <span class="price">Rs.<?php echo $fetch_product['price']; ?>/-</span>
                            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                            <h3><?php echo $fetch_product['name']; ?></h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                        </div>
                    </form>

            <?php
                };
            };
            ?>

            <!-- <div class="box">
                <form action="" method="post">
                    <span class="price"> Rs. 90 </span>
                    <img src="images/home-img.png" alt="">
                    <h3>Masala Dhosa</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    add to cart btn template
                    <button href="#" class="btn" name="Add_to_Cart" type="submit" id="addtc">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Masala Dhosa">
                    <input type="hidden" name="Price" id="" value="90">
                </form>
            </div> -->

        </div>

    </section>

    <!-- MENU end -->

    <!-- desc start  -->

    <div class="step-container">



        <section class="steps">

            <div class="box">
                <img src="images/step-1.jpg" alt="">
                <h3>choose your favorite food</h3>
            </div>

            <div class="box">
                <img src="images/step-3.jpg" alt="">
                <h3>easy payments methods</h3>
            </div>
            <div class="box">
                <img src="images/step-4.jpg" alt="">
                <h3>and finally, enjoy your food</h3>
            </div>

        </section>

    </div>
    <!-- review start  -->

    <section class="review" id="review">

        <h1 class="heading"> our<span> Team</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic1.jpeg" alt="">
                <h3>Jenil Shah</h3>
                <div class="stars">
                </div>
                <p>Front-End Developer | Graphics & Layout
                </p>
            </div>
            <div class="box">
                <img src="images/pic2.jpeg" alt="">
                <h3>Vaidehi Gajjar</h3>
                <div class="stars">
                </div>
                <p>Front-End Developer | Layout & Content</p>
            </div>
            <div class="box">
                <img src="images/pic3.jpg" alt="">
                <h3>Aditya Patel</h3>
                <div class="stars">

                </div>
                <p>Back-End Developer | PHP & JS</p>
            </div>
            <div class="box">
                <img src="images/pic1.jpeg" alt="">
                <h3>Jayprakash Lakheda</h3>
                <div class="stars">
                </div>
                <p>Front-End Developer | Media & Tech Support
                </p>
            </div>
            <div class="box">
                <img src="images/pic1.jpeg" alt="">
                <h3>A. Keerthana</h3>
                <div class="stars">
                </div>
                <p>Front-End Developer | Media & Content
                </p>
            </div>
            <div class="box">
                <img src="images/pic1.jpeg" alt="">
                <h3>Prajwal Huggi</h3>
                <div class="stars">
                </div>
                <p>Back-End Developer | JS ..
                </p>
            </div>

        </div>

    </section>

    <!-- review end -->

    <!-- About Us section starts -->

    <!-- About Us section ends -->

    <!-- contact us start -->

    <section class="order" id="order">

        <h1 class="heading"> <span>Contact</span> Us!</h1>

        <div class="row">

            <div class="image">
                <img src="images/order-img.jpg" alt="">
            </div>

            <form action="">

                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>

                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="food name">
                </div>

                <textarea placeholder="address" name="" id="" cols="30" rows="10"></textarea>

                <input type="submit" value="Contact Us" class="btn">

            </form>

        </div>

    </section>

    <!-- contact ends -->

    <!-- footer section  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="btn">facebook</a>
            <a href="#" class="btn">twitter</a>
            <a href="#" class="btn">instagram</a>
            <a href="#" class="btn">Zomato</a>
            <a href="#" class="btn">swiggy</a>
        </div>

        <h1 class="credit"> created by <span> Group 8 people </span> | all rights reserved! </h1>

    </section>

    <!-- scroll top button  -->
    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

    <!-- loader  -->
    <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>




















    <!-- custom js file link  -->
    <script src="script.js"></script>


</body>

</html>