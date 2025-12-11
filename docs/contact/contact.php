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