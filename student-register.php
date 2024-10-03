<!DOCTYPE html>
<head>
    <title>Student Register</title>
    <link rel="stylesheet" href="student-register.css">
    <link rel="stylesheet" href="navigation_footer.css">
</head>
<body>
    <div class="toggle-button">
        <a href="student-register.html"><button>Register</button></a>
        <a href=""><button>Log in</button></a>
    </div>
    <div class="register-details">
        <div class="logo">
            <img src="#" alt="logo">
        </div>
        <form method = "post" action="stddatainsert.php" onsubmit="return validateInputs()">
            <div class="input-field">
                <input type="text" name="sfname" placeholder="First Name" required>
            </div>
            <div class="input-field">
                <input type="text" name="slname" placeholder="Last Name" required>
            </div>
            <div class="input-field">
                <input type="email" name="semail" placeholder="Email" required>
            </div>
            <div class="input-field">
                <input type="tel" name="stelphone" placeholder="Phone Number">
                <p id="numbermessage"></p>
            </div>
            <div class="input-field">
                <input type="text" name="ssubject" placeholder="Subject">
            </div>
            <div class="input-field">
                <input type="text" name="scountry" placeholder="Country" required>
            </div>
            <div class="input-field">
                <input id="password" type="password" name="spassword" placeholder="Password" required>
                <p id="charcheck"></p>
            </div>
            <div class="input-field">
                <input id="confirm-password" type="password" placeholder="Re-enter password" required>
                <p id="errorMessage"></p>
            </div>
            <button type="submit" class="register">Create an account</button>      
        </form>
        <p class="sign-in">already have an account? <a href="">Sign in</a></p>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="footer_columns">
                    <h4>TeachConnect</h4>
                    <img src="danidu_src/logo.png">
                    <p>Teach</p>
                    <p>Learn</p>
                    <p>Inspire</p>
                </div>

                <div class="footer_columns">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Blog and News</a></li>
                        <li><a href="#">About Us</a></li>

                    </ul>
                </div>

                <div class="footer_columns">
                    <h4>Courses</h4>
                    <ul>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Technology</a></li>
                    </ul>
                </div>

                <div class="footer_columns">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
    <script src="student-register.js"></script>    
</body>
</html>