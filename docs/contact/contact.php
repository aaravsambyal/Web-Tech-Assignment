<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <header>
        <nav>
            <img id="logo"
                src="https://static.vecteezy.com/system/resources/previews/052/792/818/non_2x/restaurant-logo-design-vector.jpg"
                alt="">
               <ul>
                    <li class="redirect"><a href="../index.html">Home</a></li>

                    <li class="redirect"><a href="../menu/menu.html">Menu</a></li>

                    <li class="redirect"><a href="../about/about.html">About</a></li>

                    <li class="redirect"><a href="../contact/contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

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
            echo "Name: ";
            echo "<p> $name </p>";
            echo "Email: ";
            echo "<p>$email </p>";
            echo "Phone Number: ";
            echo "<p>$phone </p>";
            echo "Address: ";
            echo "<p>$address </p>";
        }
    }
    ?>
</body>

</html>