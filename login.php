<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN- procurement management system</title>
    <script src="https://kit.fontawesome.com/89c379e64d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="jQuery.js" />
</head>


<body>
    <h1>Kibe Solutions</h1>
    <!--Navigation bar-->
    <nav class="navbar">
        <a class="fa-light fa-house-chimney" href="index.php" target="_blank">Home</a>
        <a class="fa-light fa-address-card" href="about.html" target="_blank">About</a>

        >
        <a class="fa-light fa-blog" href="login.php" target="_blank">get started with us</a>

        <a class="fa-light fa-folder-user" href="contacts.html" target="_blank ">Contact</a>

        <div class="loginheader">
            <h1>KIBE'S</h1>
            <h3>Inventory Management system</h3>
            <div class="container">
                <div class="form">
                    <div class="btn">
                        <button class="signUpBtn">SIGN UP</button>
                        <button class="loginBtn">LOG IN</button>
                    </div>
                    <form class="signUp" action="insert.php" method="post">
                        <div class="formGroup">
                            <input type="text" placeholder="First_name" name="first_name" required autocomplete="off" />
                        </div>
                        <div class="formGroup">
                            <input type="text" placeholder=" Last_name" name="last_name" required autocomplete="off" />
                        </div>
                        <div class="formGroup">
                            <input type="email" placeholder="Email ID" name="email" required autocomplete="off" />
                        </div>
                        <div class="formGroup">
                            <input type="password" placeholder="Password" name="pass" required autocomplete="off" />
                        </div>
                        <div class="formGroup">
                            <input type="password" placeholder="Confirm password" name="confirmpass" required
                                autocomplete="off" />
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="checkbox" id="checkbox" />
                            <span class="text">I agree with term & conditions</span>
                        </div>
                        <div class="formGroup">
                            <button type="submit" class="btn2">REGISTER</button>
                        </div>
                    </form>

                    <!------ Login Form -------- -->
                    <form class="login" action="insert.php" method="post">
                        <div class="formGroup">
                            <input type="email" placeholder="Email ID" name="email" required autocomplete="off" />
                        </div>

                        <div class="formGroup">
                            <input type="password" placeholder="Password" name="pass" required autocomplete="off" />
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" name="checkbox" id="checkbox" />
                            <span class="text">Keep me signed in on this device</span>
                        </div>
                        <div class="formGroup">
                            <button type="submit" class="btn2">login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="jQuery.js"></script>
        <footer class="footer">
            <ul>
                <!---social media handles-->

                <a class="fa-brands fa-linkedin"></a>
                <a class="fa-brands fa-facebook" href="https:/web.facebook.com/lawy.lazz/" target="_blank"></a>
                <a class="fa-brands fa-twitter" href="https://twitter.com/LawrenceLawry3" target="_blank"></a>
                <i class="fa-brands fa-instagram"></i>
                <a class="fa-brands fa-medium" href="https://medium.com/@lawrylawrence409" target="_blank"></a>
                <a class="fa-brands fa-google" href="mailto:lawrykibe@gmail.com"></a>
            </ul>
            <a href="index.php">
                <p class="copy">copyrigh lawrence kibe&copy;</p>
            </a>
        </footer>
</body>

</html>