<script type="text/javascript">
  function showPassword(){
    var condition = document.getElementById('password');

    if (condition.type === "password") {
      condition.type = "text";
    }else if (condition.type === "text") {
      condition.type ="password";
    }

  }
</script>

<?php

    function check_input($data){
        $data= trim($data);
        $data = stylesheet($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    if (isset($_POST['submit'])) {
        $con = new mysqli('localhost','root','$Jay452002', 'Projects');
        $email = check_input($_POST['userName']);
        $password = check_input($_POST['password']);

        $sql = "SELECT * FROM `Admin` WHERE `userName`='$email' AND `password`='$password'";

        $result = mysqli_query($con,$sql);
        if ($result) {
            $row = $result->num_rows;
            if ($row > 0) {
                header('Location: admin.php');
            }else{
                echo "<script>alert('Email or Password are Wrong !!');</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./CSS/logIn.css?v=<?php echo time();?>" type="text/css">
    <title>Log In</title>
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
                    <li><a href="./CSS/logIn.php">LOGIN</a></li>
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
        <div class="login">
            <div class="text"><h1>Log In</h1></div>
            <form action="" method="post">
                <label for="userName">Email</label>
                <input type="email" name="userName" placeholder="Email">
                <label for="password">Password</label>
                <div class="password">
                <input type="password" id="password" name="password" placeholder="Password"><img src="https://img.icons8.com/fluent-systems-regular/48/000000/visible.png" class="showPassword" onclick="showPassword()"></input><br>
                </div>
                <button type="submit" name="submit">LOG IN</button>
            </form>
        </div>
    </main>
</body>
</html>
