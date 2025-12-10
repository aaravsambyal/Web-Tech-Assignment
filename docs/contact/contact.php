<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <header>
        <nav>
            <img id="logo"
                src="https://static.vecteezy.com/system/resources/previews/052/792/818/non_2x/restaurant-logo-design-vector.jpg"
                alt="">
            <ul>
                <div class="redirect">
                    <li><a href="../index.html">Home</a></li>
                </div>

                <div class="redirect">
                    <li><a href="../menu/menu.html">Menu</a></li>
                </div>

                <div class="redirect">
                    <li><a href="../about/about.html">About</a></li>
                </div>
            </ul>
        </nav>
    </header>

    <section>
        <div id="abc">
            <h2>Contact Us</h2>
            <h3>We would love to hear from you!</h3>

            <form action="contact.php" method="POST">
                <label for="name"><b>Name</b></label><br>
                <input type="text" placeholder="your name..." name="name"><br><br>

                <label for="email"><b>Email</b></label><br>
                <input type="email" name="email" id="email" placeholder="your email..."><br><br>

                <label for="phone"><b>Phone no</b></label><br>
                <input type="text" name="phone" id="phone" placeholder="your phone no..."><br><br>

                <label for="address"><b>Address</b></label><br>
                <input type="text" name="address" id="address" placeholder="your address..."><br><br>

                <button type="submit"><b>Send Message</b></button>
            </form>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $hasError = false;

            if (empty($name)) {
                echo "<p class='error'>Username is required</p>";
                $hasError = true;
            }

            if (strlen($phone) != 10) {
                echo "<p class='error'> Please provide valid number</p>";
                $hasError = true;
            }

            if (empty($email)) {
                echo "<p class='error'>Email is required</p>";
                $hasError = true;
            }

            if (!$hasError) {
                echo "<p class='value'> $name </p>";
                echo "<p class='value'>$email </p>";
                echo "<p class='value'>$phone </p>";
                echo "<p class='value'>$address </p>";
            }
        }
        ?>

        <div id="info">
            <h3>Restaurant Location 📍</h3>
            <p>Jammu, India 🚩</p>
            <p>Phone: 123-456-7890 📞</p>
            <p>Email: info@spicehub.com 📧</p>
        </div>
    </section>


    <footer>
        <p>© 2025 SpiceHub</p>
    </footer>

</body>

</html>