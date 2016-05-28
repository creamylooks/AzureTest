<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <script>
       var d = new Date();
       d.setFullYear("2016");
       document.getElementById("des").innerHTML = "/Copyright &copy; Alluring Typharh/g"+d.getFullYear();
        var x = 1;
        var y ="banner";
        function count (x){
            y = y + "x";
            return y;
        }

    </script>
</head>
<body>
            <header>
                        <img src="Typhar.png" alt="brand logo"/>
                        <div>
                            <img src="searchicon.png" alt="search icon"/>
                            <p>Search Website</p>
                            <p>Go</p>
                        </div>
                        <a href="login.php"><p>Sign in</p></a>
                        <a href="signup.php"><p>Register</p></a>
            </header>
            <nav>
                    <ul>
                            <li><a href="home.php">HOME</a></li>
                            <li><a href="products.php">PRODUCTS</a></li>
                            <li><a href="about.php">ABOUT US</a></li>
                            <li><a href="testimonials.php">TESTIMONIALS</a></li>
                            <li><a href="contact.php">CONTACT US</a></li>
                    </ul>
            </nav>
            <main>
                    <section>
                        <img src="banner1.jpg" alt="main image"/>
                        <div>
                            <h3>New Arrivals</h3>
                            <img src="#" alt="pointer arrow"/>
                            <div class="individual">
                                <img src="#" alt="image 1"/>
                                <p>Put its price here</p>
                            </div>
                            <div class="individual">
                            <img src="#" alt="image 2"/>
                            <p>Put its price here</p>
                            </div>
                            <div class="individual">
                            <img src="#" alt="image 3"/>
                            <p>Put its price here</p>
                            </div>
                            <img src="#" alt="pointer arrow"/>
                        </div>
                    </section>
                    <aside>
                        <!-- Continue from here -->
                            <div>

                            </div>
                            <div>

                            </div>
                    </aside>

            </main>
            <footer>
                <h3>Connect With Us</h3>
                <div>
                    <img src="Typhar.png" alt="brand logo"/>
                    <img src="visa_logo.jpg" alt="visa logo"/>
                    <img src="MasterCard.jpg" alt="mastercard logo"/>
                    <img src="Paypal_logo.png" alt="paypal logo"/>
                </div>
                <div>
                    <a href="https://www.facebook.com/profile.php?id=100007788017332"><img src="fb.jpg" alt="facebook logo"/></a>
                    <a href="https://twitter.com/Hacktypharh"><img src="twitter.png" alt="twitter logo"/></a>
                    <a href="https://www.instagram.com/alluring_typharh"><img src="instagram.png" alt="instagram logo"/></a>
                </div>
                <div>
                    <a href="https://www.creamy.azurewebsites.net/typharh/home.php"><img src="#" alt="back to top arrow"></a>
                    <p>Back to Top</p>
                </div>
                <p id="des"> </p>
            </footer>
</body>
</html>