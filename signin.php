<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez les meilleures offres sur une large gamme de produits avec jusqu'à 70% de réduction. Livraison disponible partout en Algérie.">
    <meta name="keywords" content="shopping, e-commerce, soldes, réductions, mode, produits, achats en ligne, Algérie">

    <title>May ecom website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>

    

</head>
<body>
   
    <section id="header">
        <a href="#"><img src="mimi_logo.png" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a  href="mimi.php">Home</a></li>
                <li><a href="shop.php" >Shopping</a></li>
                <li><a href="signup.php" class="active">SignUp</a></li>
                <li><a href="contact.php" >Contact</a></li>
                
                <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-store"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
            
    
        </div>
        <div class="mobile">
            <a href="cart.php"><i class="fa-solid fa-store"></i></a>
            <i class="fas fa-outdent" id="bar"></i>
            
        </div>
      
    </section>
    <section id="signup_form">
        <div class="container_sign">
            <form action="http://localhost/web4/includes/form4.php" method="post" class="formsign">
                <h2>Sign In</h2>
            
                
                <div>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="pwd">Password:</label><br>
                    <input type="password" id="pwd" name="pwd" required>
                </div>
               
                <div>
                    <input type="submit" value="Submit">
                </div>
                <div style="margin-top: 10px; text-align: center;">
                    <p>You don't have an account ? <a href="signup.php" style="color: blue; text-decoration: underline;">Sign Up</a></p>
                </div>
            </form>
        </div>
        
        
    </section>
    
    
   

   
   
    <footer class="section-p1">
        <div class="col">
            <img src="mimi_logo.png" class="logo">
            <h4>Contact</h4>
            <p> <strong>Address:</strong>AddressAlgerie ,Alger Usthb</p>
            <p> <strong>Phone:</strong> +213 0542-40-63-36</p>
            <p> <strong>Hours:</strong> 10:00 - 18:00 , Dimanche - Jeudi</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Info</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Termes & onditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">MY Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="Paiement/app.jpg" alt="playstore">
                <img src="Paiement/play.jpg" alt="appstore">
                <p>Secured Payment Gateways</p>
                <img src="Paiement/pay.png" >
            </div>

        </div>
        <div class="copyright">
            <p>Copyright © 2024 Mimi. All Rights Reserved</p>
            <p>Terms & Conditions | Privacy Policy</p>
        </div>
       
    </footer>
    
    
    <script src="script.js"></script>
</body>
</html>