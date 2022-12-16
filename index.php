<?php
session_start();
// session_destroy();
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

    <header>
        <a href="https://www.gsfcuni.edu.in/" target="_main"><img src="images/icon.png" alt=""></a>
        <a href="https://www.gsfcuni.edu.in/" class="logo">GSFC University</a>

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#speciality">Top Picks</a>
            <a href="#popular">Menu</a>
            <a href="#review">Our Team</a>
            <?php
            $count = 0;
            if (isset($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
            }
            ?>
            <a href="mycart.php">Cart(<?php echo $count ?>)</a>
        </nav>

    </header>

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

            <div class="box">
                <form action="manage_cart.php" method="post">
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

                    <!--add to cart btn template-->
                    <button href="#" class="btn" name="Add_to_Cart" type="submit" id="addtc">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Masala Dhosa">
                    <input type="hidden" name="Price" id="" value="90">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 70 </span>
                    <img src="images/p-2.webp" alt="">
                    <h3>Pasta</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart" id="addtc">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Pasta">
                    <input type="hidden" name="Price" id="" value="70">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 25 </span>
                    <img src="images/p-3.webp" alt="">
                    <h3>Samosa Chat</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart" id="addtc">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Samosa Chat">
                    <input type="hidden" name="Price" id="" value="25">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 50 </span>
                    <img src="images/p-4.webp" alt="">
                    <h3>maggi</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <<i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart" id="addtc">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Maggi">
                    <input type="hidden" name="Price" id="" value="25">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 80 </span>
                    <img src="images/pchilli.jpg" alt="">
                    <h3>paneer chilli</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart" id="addtc">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Paneer Chilli">
                    <input type="hidden" name="Price" id="" value="80">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 50 </span>
                    <img src="images/uttapam.jpg" alt="">
                    <h3>uttapam</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart" id="addtc">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Uttapam">
                    <input type="hidden" name="Price" id="" value="50">
                </form>
            </div>

            
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 70 </span>
                    <img src="images/rice.jpg" alt="">
                    <h3>Fried Rice</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Fried Rice">
                    <input type="hidden" name="Price" id="" value="70">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 80 </span>
                    <img src="images/manchurian.jpg" alt="">
                    <h3>Manchurian</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Manchurian">
                    <input type="hidden" name="Price" id="" value="80">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 20 </span>
                    <img src="images/p-5.jpg" alt="">
                    <h3>cold drinks</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Cold Drinks">
                    <input type="hidden" name="Price" id="" value="20">
                </form>
            </div>
            <div class="box">
                <form action="manage_cart.php" method="post">
                    <span class="price"> Rs. 35 </span>
                    <img src="images/p-6.jpg" alt="">
                    <h3>ice-cream</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <button href="#" class="btn" type="submit" name="Add_to_Cart">Add To Cart</button>
                    <input type="hidden" name="Item_name" id="" value="Ice-Cream">
                    <input type="hidden" name="Price" id="" value="35">
                </form>
            </div>
            

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

    <!-- desc end -->


    <!-- Carousel section starts-->
    <!-- <section class="home2" id="home2">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="data:image/jpeg;base64,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"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBcVFRUYFxcZHBocHBkaGRkeHRoZHRkZGhoaFx0aICwjGh0pIBkZJDYkKS0vMzMzGiI4PjgyPSwyMy8BCwsLDw4PHhISHjIpIyoyMjIyMjI6MjQ6LzIyMzQyMjI0MjIyNDQyMjIyMjIyMjIyNDIyMjIyMjIyMjIyMjIyMv/AABEIAMIBAwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAGAAMEBQcCAQj/xABGEAACAQIDBQUFBQUGBQQDAAABAgMAEQQhMQUGEkFRImFxgZETMqGx0QdCUsHwIzNicuEUgpKywvEkQ1NjohUlNdIWRHP/xAAaAQADAQEBAQAAAAAAAAAAAAACAwQAAQUG/8QALREAAgIBBAEDAgYCAwAAAAAAAAECEQMEEiExQRNRYSJxFDKBkbHwUqEFI+H/2gAMAwEAAhEDEQA/ANmpUqVYwqVKmpZFVSzGyqCSToABck+VYwC/adtkJGmGU9p7O/cgPZB8WH/jWcxyWp7bu0ziMRJM2jt2R0jXJR6D1vTOBw7SuEjBdjoAM/6DvqPI7di3yx9J8qewuClmNo0ZranRR/MxsB5mrE4HD4UA4hhJJyiU9kfzEZt4DLvNVW1N5ZZP2cY4EGSogsPICpZZU+Iq/wCCrHpG+ZOv5LaPARQj/iMQCfwRZ+rtl6A1428uHjyjgU973c/+WXwodg2RNJm2V+uZ9KtMPu4v3iT8PlSnBvt/twVww449K/uWuG3rvm0SW/kT4ZURjaEkkfHhpCHAv7O+Tdyg34W7tDQg2wVA7JYed/nevdn4l8PKt8rW8COvlS5Jw+qLsa8Uci2tV8rg5xW8eIe4aVyOlyB4EClFirL+vOlvfhRHiBIo7Eo9oO4/fH+LP+9VS+IytTtimtx404yjJxfgtUx5GdyD+VWMW8kqaSP/AIj+dCySXNXRwSRKGxTlWOYiS3H/AHyck8Mz4VzYo83QWPHObqIRwb6TLkSrdbj6Wqau/jD3olPgSPrQOdt4YHLDgjq0kl/gQPhUqCfCS2Hbibkb8aX7we18aYs+3y0UvSZkrVMO033QjOJv8Q+lNzb7D7sYHi1/kKCMbhpIrBrEEXV1zVh1U+mWtQmcgfrX9Wp/qzkuJEjck6ZoC789YwfBj9K9ffc8ogPFifkKz+MaetPcX1rm+ddnNzDKbfKUmyqg8iT8TXL70zgX4x/hX6UII2d/1c1ZYDZss5AQWXQufdH1PcKVKU/8mZOUnwGOx9745G9nLZH0DfdJ6G/un4UV0EYTc7DKCZDJIwzJYlR4ALVqNllFX+zySRdBxFk/vK9xbwsaox5pJVLkcoOuQjpUJjeN8PKsWMUKHvwyqDwm3M9B8uls6J4pAyhlIZTmCDcEdxFVRmpdAjtKlSozCpUqVYwqVKlWMKlSpVjHlBH2nbY9lhxAp7c179yLa/qSB4cVG96yfaEf9sxUmKmPDho2KR52MioSOz0UniYnvsO5OfIscbZ2MJTdR7BvZOwnn7RIjiXJpGHTUIPvH4DnU3G7cjwyGHBra+TSHNn72bn4DIVH21tqSciKIcMQyVFyyHhoKj4HCxxyKJQeI6MR2Qeg6nvrzHKWTmXC9j0MeGOL5fuMYHZsszcchIvzOp9dPOibBbLSMZDz5nzqUnAmRIFSxQSn7FEEm+extIAKfCWr0D1romwudKS5NjWqGzHVZtjC3QsNVz+o9KtHYkXXP6UzIcjcZW1olyA3yV+1x7TZ8UmpjfhJ/hYEH4qKDmcm9x+jRlg1vgsZF+C7D+6wIoHeS5Hr9PzqnS8xr2Z5mtjWS/cI9341jjkxTAH2VljB09oRfiP8oz8SKE8dj5JXJF2JOZPzNFDHi2YwXlP2vBkFvlao+A2MFyPQHTU/0oJZIwk5S+yL9JgcoJR88tg4mznNy7hBYm5GVh8TqMqsotkPwK8b3FrknQ/TSoO1do8blBkikhRyNvvHv/Kibcv9ywdSQXspIJUXUHyByz6miyyyLHu/0FhljlmcEuK7+SZuxi/bq2Ek1Oac+GQaEHodD41CdSDY69PCrzZ+FviYHVLMH7TWtZQCdRkdL1T4pw0kjDTiYjzYn86HTT3XXRL/AMli2ST8nKg5mvVVmYKoJJNgALk+AqfsfY8mIYLGuQ95j7q9Lnme6tE2PsGLDL2RxPbOQjtHw/CO4fGqmjzowbB3YW6hsHxAzvcRg/5yPkP6UWKAoAFgBkAOXgByp4DofWuZI1vcjOltWiuEYx4Qws1tRYd/PxNOLiSDbpfU2B6WpokjXNev1pidhoGNzbLp0t0pbm49McoKQ9KizApIgKEG987EaG97jxHSg/EY18BiGWBwYjYiItxC1hcG+am+h6Ea0RQ4lrZjtcxY56+prjaWzUxMR4kCScPZNs1tp5UeLLf3F5sNcoudibbjxKXQ2Ye8h95fqO+rWsOwmJeNwysUYG9wcxbl/StL3b3lWcBJLLL6BvDo3d6VdDKnwyJMJ6VKlTwhUqVKsYVKlSrGK3bchETKpIZ+yCNQD7zDvC3t32rLN68QWZcPGLIgChRploKLtobxI2N9jxDgUcIPIycQ4s/IKO8HrVJtLZ3BK7ag3ZfOvI1k28iXg9HRxjTa7KrZWzhGL6sdT+XhU/EYNHXhYAg15hUORW2mYPfn61OQVNKbvgt2cckKPAD712yte+o5edqmhG5WAA08Aad4cr1Dm2iqA689KG5T6AqEO+CWpHCvU3vXGIk7BtY8qp8DtASEKpuBctla3K2vfTiwsGvewvoL2sTl3A/OtHHJJJ8HM+eK5jzZPwyM1jYoByuCT4kd9SZFFrVG/tDqeEIeVr6W699PlTzN63N0dhTVohbLS74tOTRt8UP0rM4zc5eHkK1LY4/4mTvT8jWWxLYfAVXo+5fch1y5Rc7B2qkcjxzZwTDhb+Eg3Rx4GjJ8GysT2WRlXhZfvXvc3NwRp4VleONgCOtvTWrPYe9EsK8KsGQ6xuOJfQ6eVbVaVz5iN0Gr9NbX0GUmwMKVXsheHXhyJGdwW11PKnIAGEaRxheENdAWyYjIZWD89b1TLvTC2b4YX58MjqCevDe1ScBt3ETv7HBQJGTqyi5UdXY6D9Co/SzNbZHofiMK+qK5LjaWPGGi4TlPIvDwAhigb3rkfeJyr3dndGRwJMRdEOYTR26cX4B3a+FXu7+6SQftJLzTnMudFPPgBN79+vhpRNGFAzW3yqvDicFSPM1E/Vlb5PIcL7NAsYVVUZKBYUuNxmRTyoCbq3515LPwkXzvr0p7iu7oSn4qzlZQeVsq8kYAde4A/AUzPYjiWw/XPrUQ4+2TWB0pcsiXY2ONy5Q5iZwOdD20WkvxrewNyuvw5jKrWfMnv07qiPLwk6XtmR4fSo8km2WY4qK4G8XK7okkd72uV6VLix3EqEXu1gbC9ifkO+ozYmy3XWwv4edcYae44ktfitblYa26eNHjdPl9gTVoEdsQMk8isvDdibDThOYI8a8wz2Px8+VWO9H78X/Avpdqqkbr4mrGrR42RVJmnbq7Z9snA5vIg56svJvHkfLrRDWQbKx7Rusi6qb26jmp8RlWs4aYOiuujAMPAi4qrBk3Kn2jRdj9KlSqgI8of3w21/ZoDwn9o91Tuy7TeQ+JFXc0iopZiFUAkk6ADMk1jW8m2GxM7SfcHZjXoo5nvPvHxA5UrJPajjdFVK9jfpn58qKdibxpMBDOeFxo/wBfzFBGKn6eX1qveYrp736zqTJhU4jMOV45WjU5dnvG1xZkPP6H8jXqNQZsDfZ4z7OQ3Gna0Pdfl8qNcLtDDTjstwN05en0rzskJY3TR6+PMpqxM2VDk8/7RlbI3y6EHQ+NEG0YZEAdE9oovcIcyLHzGdqpcXFHPZgrxyL+JTY9VPWiwySl8C9VHfGl2VJwzRS+1jzBOYv6jw+tFkPBIqtbLIi/KqSPCuDYqR8fjVvgMlC3vlociPCn56a4JtLcXtkuGTQoFcAk3vpyFcYmUIpY+nM1C2djjKW6Dn38wPCp4q+T01D6bJmzTwyYh+SRn/KayxXsO/8AM1pO0ZfZYLESHIynhXwyX8qzhE+Hz/XyqrRLt/J5euf1JEaVL+WQ8ef51UzRlTdTYUU4TZrysI4kLucgB8SegHU5Vo+7X2dxRESYgLLILEIf3akdx/eHvOXdzq15EiSMW+gG3M3GxGL4ZZbxQHMHR5B/AD7qn8R8gdRs2ytkxYaMRwxqijpmSepJzY95qYMP1P0A7hTpTQg50mTcnbKLpVZ5wMBkRTQe2Tf0pjEYllNjn4c66EgcX9aW5LwGoOrfQ6lsyPD/AHptnvdWFQp5zHy7OV+6vJ3VrEG3MHvpUsnAxY+bPJpSnvG4+6b/ADqBtAq68R1Fd4x1dDxXyveoKS8UZsBfp8r1LOdul0WQjSvyLCYri4gWvbzJFQsbILMbnpbPQH41Dgn4JGW1r39enhTGNxWQAPaJsPHSgoY+z18YWk4RkeEjxJ5GiDZEPDHc6k38dM6DX2gsbB3YXJuTcaXyFvK9Qtqb1vOxRSVhysoyJAGZfr4aVRgxOTvwS6rLGMa8lrtvGK8zkG63HPkotl4moDuMgDm2Z7h/U/KocMwIvpzPcBpShluSxyv8FFXVSPGk7dli04FlHPM+A0+PyrSNwdoiSBo75wtw+TDiHoSw8qyR8VwhpD5Dv0UeX5UUfZHjCuIkjY/vUv4uhLfJnPlXcfEkzR7NgpUqVXBgZ9pGKZMOihiA72YdQFJAPdcX8qy2d8q0P7XD+xgt/wBQ/wCQ1lLSsKky/nAfZ7I2pI/26VW4hz5mprz9VPrUSRVPUV2Jirn6U7gtqyRZA3X8J/LpTk2Hvoahvhz0pj2yVSQyMnF2g22Pvuy2HGV7mzHkaMMJvXDJ+8TP8S5/LOsTKHpXcM7p7rEfKpMmhg+YOiuGra/MrN9ieCQfs5R4G3+/wqv2ju48maEE63VrG/UaGsih27IuoDfA1Z4bfCVNGkXwa/zpC02aDtUxz1GOS5NJj3fmeMJKXYA3zOZ8xyqxw+y1RQpKoo5A3NvLIedZgN/ZgPfc+lV8238RO9+JrtZQASST0AHM91Z4M0u0kF+KhGNXYS79bbEkqwR+5HYAD8XTyvS3b3XlxVivYiHvSkZE8wg+8eXQfCrbc/7PmNpsXcXzWK+Z75Dy/lHmeValBhQigKBYWsLaW6DQU6P0R2x/cjmt8t0v0RXbF2PFhECRL2iBcnNierHn8hVnwM2ulPIpGZteuvaeVdS9zXXSI7w9DnTJxBQ2bTSpTvUTEkcJoJtLoZHnhimPGP1nVaSUYZZH4Gn5J7AAcqgTygkXPlepMmRMrxQa48HTzluNTyztysfnTKTALl8eX0pmSezZHh/Md9QWl4QRfmTyzHdU7kyhRVEp57DqSP8Aeq1MSAz/AKF+dMYjFWNUO2NtLEuZHG2ijUjS/d40eODk6QM5qKbZLkxigvIxso69edqFNq7yMzWiytftWHPUjvqpxeLknPabs8lGSjy5nvNdRYYWzNeni0sY8y5Z52XVt8R4G0VnPExJJ5n9aVPhjt+uXKu04FGop4TxjO4NUMibs7HJeuZ8OQ/P0qU7jJLdCfyH5+lRUxSC51JzpDFDMg9o8+hPOgaBFif2kgRfdX4tz+nrRLuSP+Pg4clViLjmSjA/SqHDNGi5OoOmo9aI9y54hi8OiyKTxZAEEk8LdKy7RjbaVKlVgYCfalEWhhsbWkPX8B6CssfDn8Y9D+a1r/2lw8WCLDVHRvK/Cf8ANWN/2prgC5OlhqT0FRZo/VYLZy0H8afD6V5DsySTKMcf8g4v8tEkeFSAAzASSnP2Z9yPpx299u7TxqVFi8VKLJxKvJV7KjwCjKpXm/x5LMekbVydAbitjyxi8iMg6srKPU2qvbD/AMS+o+tabAMXH95vAkn/ADC1V+0djRYoMFRIsTqMgqSn8LgZKx/EPO9dhqXdSVfIU9K0ri7M/MH8vr/WuDCOgr2ZQrMjx8LKSGByIINiD3g1x7ND1q1J+5HYjCv4RXhhX8Ir04UdaL91vs6lxNpZOKKHUG1nkH/bB0H8R8gazdK2zqVukDux935cVII4Y+JuZuQqjq7ch+heto3R3HgwQDkCWa2chHu9RGp90d+p+FEGxNiw4WMRwxhEHTUn8TE5s3eas2FqB3JfAxJRGAAM7ac67TTKmy2oPl4d1eocu7upS7GNcHTNUWSXPrTsxvpVdMLE31/QpOWTQ3FBM8xG0RxcNcNiQRao/se1xE6+OVRMRIqe71qOWSXktjjh0iRLiAcqq5W7ZY8hYfoVHmxJsTemVlvrfzpTbY5Kh9JgSzd1s+dVuIxPOvMfixbhvYdetCO39qEBkHEhI7J5let+XOnYsMsjoVlyKCti21vGEJWMhn0Laqvd3tQuxLsWd7sdSbk1M2XsGab93E7jqFJHm2g9aIYNy5R+8aKPuaVb+icVeoniwqrR5U3kyu6YLpAv4/8AxNSFw6f9Rv8ADRam6Sj/APYg9ZP/AKV027EgzjbDydAJLH/zAHxofxON+UA8GReGCi4ND96Q+Q+tPps1D/1D6fWrfEbOxUQLSQMo/EoDLb+ZLgetRk2jRp2uGKdrhjK7IX8L+bU6uxo+a/8AkfpT5xw1NPf+ooBpc/rOtyDYwuyI/wAIPrV7uZgY1xuHIQAh+n8LVSja2vZAq73Q2hx47DjLN+XcjfSiinaNZt9KlSqsMqt48H7XCzR82je3jwkj4gVjG6ODu8mIYX9ko4Af+o9wp/ugE+Nq3k1kGyIuGHFxr7yS2t3DiQfEGodbag2vsO00VLKrJOwNiGZvbSZgnsg8+pNEmIVo1/Zw8RzyuAMtD50OzbdxGGb2f9lLxhCVZC11AGVgNeVVuG3pnkK/tFkt/CY2BHI8Jt5FTU+LFxwehKMpW0TMa+05GtwpEv8AACxHrrXOA2JiDxySyMxFuG4A7QNyRbQaCrHA79ozcEkDhswSjKyi2pNyLDxq6/8AyHCutvacN8u0CBcjkdPjXZxqLVCYY5qV22ZT9ouDtiI5VFvbRqzf/wBFPAx8xwfGhzAYKSWRY40aR2yCqLk/QdSchWobc3elxs8UcYCpEnbkb3VLEsVH4mtbIdc7Ua7s7tw4OO0a9tvfkb3m8TyH8IypuDJ/1qyfND637Azud9n0cNpcVwyyjRNY0Pff3279ByHOtAK5ivQK6GdHy+weF0ICxro1yTXDPRXRqs5kFtTlpTfFYWBy76TzVDlfnSJzS6HQg32OTS9KgSyg865kltkKgzv1qLJOyvHCj3EYrK1VOJe/Ou5376r5Xvcsch5ZVP2ULgQW5BOS305k1W47aCo/DfikbRA2dugvTGO2kZP2cTBQL3Y2BIAueAHTLn/vTkUEURRl4ZZpOFY0YWftH8Zube8SSNL1Viw+ZCZ5fY6w2zpJbCRc2DGwJConV2+745916iTxYOBuLgGKlGV3/dIBkFjQ5EDq16s949oEfsEOQ99h99uflyAqjwmwsRKbojEZdpuyo77tr5Xresq7pfsA4+/LHZNtzzME4iASFVFyGZsAAMhT21dkYmEIWUnjJACEuRYAm4Ay5+hqVh9lLhZI2JDyqSSPuAFOywy1B+fdRgGLLxAlzZWPAVzGQsCTbLM1Dm1Kg04K0FzQH7vbtviAHdikd9BfjItkVuLWP1q3k3LQcdp3AAuoIUWsM+I8/ICr/HbWjQgA2Y27OhN8hcHPw8aibR4wCWey5cSkCx52vrUktXllLjhP++wSXlmdf+oYvCuAHOgORJGd8u85VYLNh8b2JoxBOdJUAF2/7i5Bvn30STqrxukTosh7StYNwk3FwPusM7VneInmSVvbqzODYuFAuQO6wOVsxXq6fL6qbSqS/diJ0uJco52ps+TDyGOQZ6gjRlOjL3VGMR5m1uR1o3x6/wBqwIk/5kNiDzMZtf6+VBciEG/rXoYMm+NvtcM8/Pi9OVLp8obCVf7if/I4X+f/AENVDar3cT/5HC/z/wChqeuxJ9D0qVKqgxt6xdtqLhdqYlZMopHdX/hDNxo/lxfE1tEpyrB/tKg4doS/xhG9Y1B+INKzQU40woycWpLwa1g0VkAyaw15EciPKg7evYsLzxRojJLISS6huIAg2zGTZ635dKCt2N8ZcOBEz3Qe7xZgd3UUfbN3smmYJHCHbmQ2QHViRkK82TeN00/uvJfCW5bk/wBAFx+7+KhkYGNpePskoDdluCQw1F7a6UW7v7tTP7OXFkKEIZIRbI8jI3MjLIWFxRrCrEAuQW5gXsPC+vjXWJ90Hoa68snGmMU64Q7hGsrcPI1Lhkvn+r1AwjgeB+dPBirAC1ut6KEqSEThbZLkGYIv4ePPy/OleuFkv3d1R5JCCOlNc0uRcYN8EiVsqiu9hqL16ZMqjyuKVOXkZCJy8htyvUaWWmppahzYnvzqWUymMB6WXvqsxGKpufEdTQxtXb33YiO+Qi4AvY8I5tf586BJzdIPiK5LHH7SWPU3J0Ue8fKqWMyT8JkvGpawSxOfIubZedTNl7EmlVi0ZVmIPG78JI0uTm3w8LVVbV2tHhDKiN7SZzm4PZUXPZQa5C2Z8r1Vjw10rYqeT36LvHCDBoHJQTKtkGV1BA5ck1uD391Ue48pn2gZnJYpG7An8WSiw5ABzagwyPI12JNzfM86NPs7IXFhfxo6jxyP+mqMsNmKXvRNDLvyJeLLaKAPiBxkgA8RtqQpBt3X60aYnFvZSi8Yt7otceN/HXuobXZDvLxIyrw3uGPvAm1sh3UWxKVU9kHlkcyLdTnXy2qyJ7eb46PSapsC9vEPd5CeL3VQC+dtBY/GrPcbDkI7sWB91U4yQAMybaXv+s6j7xoiABWVAb3H3j04fPXxpndnZkiks8nYbMZniyFrA+7e51qnJOM9Lxwv5Io4duVtu2E+JaOb3j2o3yZQOJWGuo0IyPcaC97DiyY4ow6rLqwINuFhxEkZiwN+VE0+z2UrwXcN2TY2C3OZe5sb9dRy1q4hwHCGAZWva4Onl31Nhyxw1JfVXSf9/UOTm3VUgW2JgcNGyQjiWS/FxEgl+EgFW4s7G+g0v1q92th4MldUHEbXFgc76jnQ3vJhTE8bqxKEspJPaQ2Jseoy17qBsfPMg40d2JNuM5iw5Le5786sx6aWorIpd+/uD6qi6a5NF2VhOAywkhlZGAPUWNr9DQHJBYkdKKtxuMks7FiQxJP8pocnzdv5j6XNejok4ylFuxev5jFlY6Wq73HH/uOF/n/0NUCVKtNyF/8AcMN/P/oavRXaPNN/pUqVVDBubSsZ+1qK2MRvxRr8HcfStnkrKvtdg7cDdVkHoVP50vJ0Z9ANuhuycdifZ8RSNAXdha4W9gq3y4mOXkTyratmbIhwkYigQIg11LM34mOrGg/7I8bGplgKgSsRIG5ugUDh/um5/vGtExKfe5/lU2VNx4HYWhgfr+tdMgOR0pWtYD15ZV1xeZqevcffsV8gVDYANzHdbS3hTqT8S5ajWwtn1Ar3FICOnQ9KrosRwtbUd4pMpbXXgojHcr8kxJrDtanT5+teriOIWP8AtUXE294Z2N7U0swte1qFTd0dcFVkgykdL1GklPPl3/Oo8kt9f14VExE1gTxf0oXJhbUOzz61S4/aITLUm9lGp8Kpdsb2RR3CNxnqLW8utCmK3rdjdAVNrXJyPfam49POfLXAE80IeQoIxWKYqtoo11LWNyfAm/nanYZMLg3czcTuosGZoyGPPgUG6+dAMu2sRIAnFYXyVFAuT3DUmrePd1I7PjZWVyLiGOzSW/jZuzH4Znwqr0owXLr4Qj1nLpWObe3zkmHs47pGLgC/Llfr5+lDCISbnM99F6x4BQP+FJBIHE80lyTp7hAv5VPGxsFLkhkw7nS59pH53sw8bmiWfHBdNfIuePJLyn8AphsKAb1a7PxQhljkH3GBP8uh+BNebR2dJh2CSDUXVlN0deqNz+Yqvlem8Tj8Mm5jL5Ro29AdCJoiTazC17FTqLDXqO8CpmwVxBjWRnZVZSeB1YHivmwvZguuVu8VVbm7T/tGHOHLESw+7YkFo+QHhp6daeh2xMZGQQSFFATj7TDj775m/wCuVfOanDJXjSXHNuuv1PZjNSSl7/yNb0wyMqEHsk3OXvC/XUC1O7JxE0cN2QSIbsnDf2mf3AtswBbO/M1zs/BSTofacSk3ICgquvMHMaaVf7IRI1EefEgAbmRyBHcbDWlZMihi9NpOn/eQFC5uSB6PbzBrEML5lWBUjO2d+XfVlsDabyHs6E2Op5mm96IogpJcKxIW5NjmbXt51TbFwiriFCFuBb8VjcNpwhrHLmfKtsxTxOaVf+HHOSkoslb5y4VolbiYTn3VN1axI4y6HTIcxfTrUrCbOw7YWMOuaKGJBIJNs9Dn0pvfTZ0bCLgiTj4iWce/wjRWP3gS17m+nfVUyytJHGri33gLe70I5cs9afBqWGOyVdvnwDCFZG2u6QQQFcPh5ptFVGt4kWA+dZ1hcR1P9b0UfaFj+CGPCKe01nfuA90H5+tAWFa+XMfKvT0GJxxbn2ybXZFKe1eAgY3y9KuNyh/x+G/n/wBDVQYZsrelEO5Y/wCPwx6v/parV2iDybxSpUqqGHD1nn2sw3hhfpIy/wCJCf8ARWhvQX9pkfFgifwyRt6kr/qoJ/lZn0ZBBO8bpJG3C6WZT0I/WlbxsTaIxOHjlFu2oNtbHRl8mBHlWCuMvWtM+yraKHDvCXAdXZuEkX4GAzA6XvU/g7jfIZMpvbpzv8K4MwvXOOBsSL/WoTSgnLLxHrUU5bXR6MIblZ3JNY5Z565nlawz1/rUSeTiFhp8a8dx1Fvre9RZXqebbHwikNe3dMmzX9fryrtpbglTTMs1gb6d9Bu8W+yJdMP2304/uL4fiPhlRY8cpuonMmSMVbLza22Uw68UkgHRbXZj0Ua1m2395JcSSLlI+Sg6/wAxGvhp41VTzvKxaRi7HUk3Ph3DuFIJXo4tPHHy+Wefl1Ep8LhDCxXp9MKakQRZ1OWMixyA76e5E9l1u1gPYQnGcIMhYxwgjRvvSAdRoPOncVu5OqCVxdmb71ze4JvlrRju9s9XTCA5qsXH3FmNyfU0UbVwCtC6u4vfiQuwUBhmi3A0vbqbV58Zucm/mv0LJx2xUV7f7AndjaUF1w+IiVJCbA8J4SeV7+7l1q925unG49pGOCQC2psR0I0v30NY/aUUdw8YZ0cIZQgCspAvwktxFQb2/V77Ze+8Mv7NiADkpW9/NTmdNfhTJ4qVo5ijNrkpYMP7RGwk2je4x1jk+6w/WYrPcWGjd45BZkYqw6EGx8q2LaeBRkWaNwwuM19c+hrMd/4rY2Qj7wjY+JRb/Kg0kmpuD+53ULdBS8p0VGE2g8MqyxNZ0Nx0PVT1BrVtl7bXGRiXDkCRbccR5nnboeYPP5YzwmnMFtCTDyCSJirD0I6EcxT9VpY54/IvT53jfPRrS7b4Z1vdfakr7NhYqVIHF5lh61H3g2lLFIpzCOBxZDtC/M2yteq/AbxYTHhVxAEU4twuLe8NGUnU38/Gq7b+6eMZjIszYgfiuT4XXl6V5MdJCM6ycffz7UXubauHJb4zDRSxszC7DW5sbcip615sWZcOX95wwyFgWDeI5VxsHCTSYdg4b2qHhCsAMutz93870+mz2jlBWUyMv/LjjzvzDm5AHjbxoG1TxtqkZxtqVDT7UKW9uGHG3ZVWztoR1NWkKQ4SN8VIvCW91CbknRR38r+lR8XFFhj/AGrGMplt2IhYlRyHj1Ns6BNu7dkxknE+SD3EGij60/BpvUapVHz8/CBy5VjXu/HwNbQxLTSNK5uzEk/SoBBVrjlU7Drenp8JceFezwlSPIk23bG4MT6fnRZuSb47DEfjz/wNQSqkZVpP2VbGZ5hiWHZUkL3mxBNDtuSo4lybNSpUqpDOHoU3/W+Bm7uA+kiUVS6UO74pxYLED/tk+mf5VyX5WbwYbIMvOosWKeKRZI24XRgynofp3VMxI1qpmbWo0CjXd3t60xa2bKXLjjOdjcdqPO/Bztyq4nAIPCbjXrqdR3Vg+HxDxuskbFXUgqRqDWn7r74wS/s5LxTMBe5/Zswv+7uxCE62Nr5a2pGXA310X4dQlw+wgd8r+R6eV6ptrbaiw6FpDa+ijUnoBzqu3n3ijh7EbB5DyBuE/nI591ZnjMRJK5eRizHmfkOg7qHFpnJ3LoZl1KjxHllntzeaXEkrfgj/AAA6j+M8/DTxqkVa7SOn1jzq9KMVUSCU3J2zyOGnvZZCpUUeQPlXbx5EW76zYFkfDjTurzaUwJKjlTsIzI86jY5e0e8UKMatuDtAy4OPha0katCSLXX/AKbWOWlvOp8OxMQTNxy34wArEcTKRezAt7pzvkKy3c7bzYWbqj5MvI/16f1rcNk7YimUFWB/zDuIqGaeOb9nyi+Et0E19n+gCT7pYpriXhlF7kk8IdbZA5XDZa6HnUV/s9YEOHEIuAWdhzNrKRc38edawQDz+NM41oQvFJwEKQw4rEBhmGHFoR1FM9aXvwZTfhcgZsvc3+yKWMz9om44uzYDV9OK2ufSs027jhiMTNIPdLWX+VQFHwFFf2gb7h1aGA9k5M45j8Kd3U1nmBbrTMMHueSX2QvUZHtUR1kFRsVDlU94uXpS9nxCqbI7KErV1szebEwW4JDYcmuR5G9x61XYiKxpi1E4xmqkrDjNxdxYeQfaROPfjRu/I/MX+NMY37RcSw4Y1WO/MAA/AX+NCCC4pBKQtLhTvahr1OSqsdxWKeVuN2LHv/KnMP0rhEqbDhr07hKkIbvljntLWt50/wD2uo7RG+YvRTuxuRLiyrvxRRc2IzYdEB+enjQd8I5TY3uruzJjnNuxEpHHIR4HgTq9vIc+V9w2Zgo4VSONeFVAAHcKb2dgY4Y1ijUIiCwA+JPUnUmpsWop8IbUElRMpUqVdMNTaVWbUg9pFJH+NGX/ABKR+dWctRXFd7R1HzpibgEHI2sR0I5VVSGjff8A2YYcS7AdiXtjpc++PG+f94UFumdRbadAkavF5U97O1eKlMRjlF5UvZ5mnlj50+keV+lds1jCx12sfwqSEy+R+dJVzHfQuRyx6CO4t1zHjyrsxm2eR8q6ERC5DTnTMkhOVqGzgwos47j8KZ2nHby+VTZUNwa9x+FZlU2NrdK25IwPlbkjrVns/bckQzLG3MGzD61HbDkcj6V0MKTyOfdRPbNVIZCcou0EKb9S2sJnHl/SqjaW8skuru/ibCoS7GkOiMR4GpUO7WIbSNvShjhxxdpDZZ5tFUAWN21+VTMPH2geXOr7Dbl4pv8AlsPI1e4LcOfQpbxIFMbb6QlpsGFjv5aeHSu48Kc7A0bQ7iyrrw+t6lruZJ95qHZNnNpmOL2a5Ol6gHZsl/cb0raMPucg94k1c4XY0cfuooPW2dMjjl7hUYVht3cS3uwyePCR86s8PuTi2P7sL4sK2s4UV2mGo9nydpGVYL7OZW991XwJJohwX2bxL70jnwAFHaRVIRK7sRih2duhhYyG9nxsObni+ByokRABYCwrxRTgo0kujHopyLUVxXcWorHCXSpUqE4NTcqjNSpV06gG+01B7BMhk4tlpkdKyCTWlSqXL+YGXZ4/69K56V7SoInBJUyLQ0qVdZw7w9dJXlKlSMTMWP2a+NQohmPGlSoI9GQRYeJcuyPQVORR0r2lTsPQ7wXGxcOjHtIreKg/OiRsJGBkiDwUfSlSqqJmMmJfwj0FPQilSo0cJ8VSVpUqIx1XBpUqxhtq8NKlWMc16K8pVjDi04KVKscOxXopUqx06ruL3hXlKscJlKlSoTh//9k="
                    alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="data:image/jpeg;base64,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"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </section> -->
    <!-- Carousel section ends-->



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