

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./CSS/style.css" type="text/css">
    <title>Contect</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./images/logo.png" alt="logo">
        </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="#">RESUME</a></li>
                    <li><a href="#">ABOUT ME</a></li>
                    <li><a href="contact.php">CONTECT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
            </nav>
        <div class="burger">
            <div class="burger-menu">
                <div class="first-slice"></div>
                <div class="second-slice"></div>              
            </div>
        </div>
    </header>
    <main>
        <div class="bubble1"></div>
        <div class="bubble2"></div>
        <div class="bubble3"></div>
        <div class="bubble4"></div>
        <div class="form-cointainer">
            <div class="chats">
                <div class="greeting">
                    <h1>Lets's talk</h1>
                    <h4>Ask Me anything or Just say hi...</h4>
                </div>
                <div class="contact-details">
                    <div class="phone">
                        <img src="./images/phone.png" alt="phone"><h4>+91-8511525711</h4>
                    </div>
                    <div class="email">
                        <img src="./images/mail.png" alt="email"><h4>jayjoshi2045@gmial.com</h4>
                    </div>
                </div>
            </div>
            <form action="" method="post">
                <div class="name-email">
                    <div class="set-name">
                        <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Name" required="true">
                    </div>
                    <div class="set-name">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email" required="true">
                    </div>
                </div>
                <label for="message">Message</label>
                <input type="text-area" name="message" required="true" placeholder="Message">
                <button type="submit" name="submit" id="send-btn-contact">SEND<img src="./images/send.png" alt="send"></button>
            </form>
       </div>
        <div class="social-media">
            <div class="icons">
                <a href="#"><img src="./images/twitter.png"/></a>
            </div>
            <div class="icons">
                <a href="https://www.facebook.com/profile.php?id=100010197250221"><img src="./images/facebook.png" ></a>
            </div>
            <div class="icons">
                <a href="https://www.instagram.com/mr.joshi4520/"><img src="./images/insta.png"/></a>
            </div>
        </div>
        <div class="copyright">
            <h3>© 2021 Jay Joshi</h3>
            <h3>ALL RIGHTS RESERVED</h3>
        </div>
    </main>
</body>
</html>

<?php

    function check_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    if (isset($_POST['submit'])) {
    $name = check_input($_POST['name']);
    $email = check_input($_POST['email']);
    $message = check_input($_POST['message']);
    
    $con = new mysqli('localhost','root','$Jay452002', 'Projects');

    $sql = "INSERT INTO `Contact` (`name`, `email`, `message`, `date`) VALUES ('$name', '$email', '$message', CURRENT_TIMESTAMP)";


    $result = mysqli_query($con,$sql);
    if ($result) {
        echo " <script>alert('Thank You For Reaching Us, I will Reach you Soon ! ')</script>";
    }else {
        echo "<script>alert('Opss Something went wrong !!')</script>";
    }
    $con->close();
    }
?>
