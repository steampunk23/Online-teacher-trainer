<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TeachConnect</title>
        <link rel="stylesheet" href="./danidu_css/contact_us.css">
        <link rel="stylesheet" href="navigation_footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <body>

        <section class="main_landing_section">
        <nav class="navbar">
                <div>
                    <img src="danidu_src/logo2.png" alt="TeachConnect Logo">
                </div>

                <ul class="navbarlist">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                </ul>

                <div class="search_bar">
                    <form>
                        <input type="search" placeholder="Search Courses">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>

                <div class="nav_buttons">
                    <button class="register_button">Register</button>
                    <button class="login_button">Login</button>
                </div>

                <!--<div class="user_profile">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>-->
            </nav>

            <div class="contact_us_container">
                <div class="Contact_us_items">
                <div class="contact_info">
                     <div>
                         <h1>Get in touch with Us</h1>
                         <p>
                            We're here to help! If you have any questions
                            or need assistance, please reach out through the contact form.
                            We'll get back to you as soon as possible. 
                        </p>
    
                        <div class="icons_and_details">
                            <div class="phone_info">
                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                            <h3>Call:</h3>
                            <h4>011 2345667</h4>
                            </div>
    
                            <div class="Email_info">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h3>E-mail:</h3>
                                <h4>teachconnect@info.com</h4>
                            </div>
                        </div>
                     </div>
    
                     <div class="follow_us_links">
                        <h1>Follow Us on</h1>
                        <ul class="follow_us_icons">
                            <li><a href="#"><i class="fa-brands fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                        
                     </div>
                </div>
    
                <div class="submit_form">
                    <form action="./insert.php" method="post">
                        <div class="input_box">
                            <label>Name  :</label>
                            <input type="text" class="input" placeholder="Name" name="name">
                        </div>
                        <div class="input_box">
                            <label>Phone Number  :</label>
                            <input type="tel" class="input" placeholder="Phone Number" name="phone_number">
                        </div>
                        <div class="input_box">
                            <label>Email  :</label>
                            <input type="email" class="input" placeholder="Email" name="email">
                        </div>
                        <div class="input_box">
                            <label>Subject :</label>
                            <input type="text" class="input" placeholder="Subject" name="subject">
                        </div>
                        <div class="input_box">
                            <label>Message :</label>
                            <textarea type="text" cols="30" rows="8" placeholder="Your message" name="message"></textarea>
                        </div>
                        <input type="submit" value="submit" class="contact_us_button">
                    </form>
                </div>
                </div>
            </div>
        </section>


        <!--Contact Us History-->
        <div class="contact_history_box">
        <div class="contact-history">
            <h2>Contact Us History</h2>
            <div class="message-container">
                <?php
                // Include the PHP script that fetches the messages
                $messages = include('display.php');

                // Display messages
                if (!empty($messages)) {
                    foreach ($messages as $message) {
                        ?>
                        <div class="message">
                            <div class="message-content">
                                <p><?php echo htmlspecialchars($message['message']); ?></p> <!-- Message content -->
                            </div>
                            <div class="message-actions">
                            <button class="btn btn-update" onClick="redirectToUpdateForm(<?php echo $message['msg_id']; ?>)">Update</button>
                            <button class="btn btn-delete" onClick="confirmDelete(<?php echo $message['msg_id']; ?>)">Delete</button> 
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p>No messages found.</p>";
                }
                ?>
            </div>
        </div>
    </div>

        <!--Footer Html Codes-->
        <footer class="footer_section"></footer>
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
        
        <script src="danidu_js/script.js"></script>
        <script src="danidu_js/home.js"></script>
    </body>


</html>