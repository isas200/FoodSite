<?php
    echo $this->layout("_theme");
    //var_dump(url("localizacao"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="themes/web/assets/css/styles.css?v=<?php echo time(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodSite</title>
</head>
<section class="food-search text-center">
        <div id="container">
            <form action="">
                <input type="search"placeholder="Search for Food!">
                <input type="submit"name="submit"value="Search"class="btn btn-primary">
            </form>

        </div>        
    </section>


    <section class="food-menu">
        <div id="container">
            <h2 class="text-center">Menu</h2>

            <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="images/menu-pizza.jpg" alt="Chicken"class="img-responsive img-curve">
            </div>
            <div class="food-menu-desc">
                <h4>Pizza</h4>
                <p class="food-price">$2.30</p>
                <p class="food-detail">
                    Feito com ingredientes organicos.
                </p>
                <br>
                 <a href="#"class="btn btn-primary">Order Now</a>
        </div>
        </div>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="images/menu-burger.jpg" alt="Momo"class="img-responsive img-curve">
            </div>
            <div class="food-menu-desc">
                <h4>Hamburger</h4>
                <p class="food-price">$2.30</p>
                <p class="food-detail">
                    Feito com ingredientes organicos.
                </p>
                <br>
                 <a href="#"class="btn btn-primary">Order Now</a>
        </div>
        </div>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="images/menu-momo.jpg" alt="Chicken"class="img-responsive img-curve">
            </div>
            <div class="food-menu-desc">
                <h4>Bolinho de Massa</h4>
                <p class="food-price">$2.30</p>
                <p class="food-detail">
                    Feito com ingredientes organicos.
                </p>
                <br>
                 <a href="#"class="btn btn-primary">Order Now</a>
        </div>
        </div>

        <div class="food-menu-box">
            <div class="food-menu-img">
                <img src="images/menu-pizza.jpg" alt="Chicken"class="img-responsive img-curve">
            </div>
            <div class="food-menu-desc">
                <h4>Pizza</h4>
                <p class="food-price">$2.30</p>
                <p class="food-detail">
                    Feito com ingredientes organicos.
                </p>
                <br>
                 <a href="#"class="btn btn-primary">Order Now</a>
        </div>
        </div>
            <div>
            
           <div id="fix"></div>

        </div>
        
    </section>

    <section id="footer text-center">
        <div id="container text-center">
            <p>FoodSite</p>
        </div>
    </section>
</body>
</html>

