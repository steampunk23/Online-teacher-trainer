<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeachConnect</title>
						<style>
					
						/* Body Styles*/

					* {
						margin: 0;
						padding: 0;
						box-sizing: border-box;
						font-family: "Poppins", sans-serif;
						
					}

					body {
						background-color: white;
					}

					html{
						scroll-behavior: smooth;
					}



					/* FAQ Style */
					.faq-section {
						margin-top: 12px;
						padding: 50px;
						background-color: #f4f4f9;
						text-align: center;
					}

					.faq-section h1 {
						color: #152153;
						font-size: 36px;
						margin-bottom: 10px;
					}

					.faq-tagline {
						font-size: 20px;
						color: #555;
						margin-bottom: 20px;
						text-align: center	;
						text-justify: inter-word;
					}


					.faq-box {
						max-width: 800px;
						margin: 0 auto;
						text-align: left;
					}

					.faq-item {
						background-color: white;
						border: 1px solid #ddd;
						margin-bottom: 10px;
						padding: 15px;
						border-radius: 5px;
						box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
					}

					.faq-question {
						font-size: 18px;
						font-weight: bold;
						color: #152153;
						cursor: pointer;
						margin: 0;
					}

					.faq-answer {
						font-size: 16px;
						color: #333;
						padding-top: 3px;
						max-height: 0;
						overflow: hidden;
						transition: max-height 0.3s ease-out;
					}

					.faq-answer.open {
						max-height: 150px; 
					}



					/*Navigation Bar*/
						
					.main_landing_section {
						width: 100%;
						height: 1vh;
						overflow: hidden;
						/*background-color: #fae3cf;*/
						background-position: center;
						
					}
					.navbar {
						display: flex;
						align-items: center;
						justify-content: space-around;
						left: 0;
						right: 0;
						padding: 0 10px;
						margin-left: 0;
						box-shadow:  0 0 10px rgba(0,0,0,0.5);
						position: fixed;
						background-color: white;
						
					}

					.navbar div img {
						width: 100px;
						margin-left: 10px;
						padding-bottom: 2px;
						padding-top: 2px; 
						cursor: pointer;
					}

					.navbarlist{
						display: flex;
						text-decoration: none;
						list-style: none;
						margin-left: auto;
						
					}

					.navbarlist li a{
						color: #152153;
						font-size: 16px;
						font-weight: 600;
						display: block;
						padding: 12px;
						text-decoration: none;
						transition: 0.1s;
						
					}

					.navbarlist li a:hover{
						border:2px lightgrey;
						background-color: #152153;
						color: white;
						padding: 12px;
						cursor: pointer;
						transition: 0.4s linear;
					}

					.search_bar{
						margin-right: 40px;
						margin-left: 30px;
						position: relative;
					}

					.search_bar form input{
						background: transparent;
						width: 20vw;
						font-size: 15px;
						padding: 6px;
						border: 2px solid #152153b0;
						outline: none;
						border-radius: 40px;
						color: #152153;
					}

					.search_bar form input::placeholder{
						color: #152153;
					}

					.search_bar button{
						padding: 6px 6px;
						font-size: 16px;
						float: left;
						border: none;
						border-radius: 40px;
						position: absolute;
						top: 2px;
						right: 2px;
						background: #15215341;

					}

					.nav_buttons{
						display: flex;
						gap: 10px;
						margin-right: 10px;
					}

					.nav_buttons button{
						padding:6px;
						font-size: 15px;
						cursor: pointer;
						border-radius: 40px;
						padding: 7px 16px;
						text-transform: uppercase;
						letter-spacing: 1px;
						font-weight: 550;
						align-items: center;
					}
					.register_button{
						background-color: transparent;
						border: 2px solid #152153;
						color: #152153;
					}

					.login_button{
						background-color: #152153;
						color: white;
						border: none;
					}

					/*.user_profile{
						border:2px solid lightgrey;
						font-size: 15px;
						padding:6px 8px 6px 8px;
						background: rgba(211, 211, 211, 0.5);
						margin-right: -55px;

					}*/




				 
					/* Footer General Styling */
					.footer_section {
						background-color: #152153;
						padding: 40px 0;
						color: white;
						font-family: Arial, sans-serif;
					}

					.footer_container {
						display: flex;
						justify-content: space-between;
						flex-wrap: wrap;
						max-width: 1200px;
						margin: 0 auto;
					}

					.footer_columns {
						flex: 1;
						min-width: 220px;
						margin-bottom: 30px;
						padding: 0 20px;
					}

					.footer_columns h4 {
						font-size: 18px;
						font-weight: bold;
						margin-bottom: 20px;
						position: relative;
					}

					.footer_columns ul {
						padding: 0;
					}

					.footer_columns ul li {
						list-style: none;
						margin-bottom: 10px;
					}

					.footer_columns ul a {
						text-decoration: none;
						color: #ffffff;
						font-size: 14px;
						transition: color 0.3s ease;
					}

					.footer_columns ul a:hover {
						color: #f1c40f;
					}

					.footer_columns p {
						margin: 10px 0;
						font-size: 14px;
					}

					.footer_columns img {
						width: 120px;
						margin-bottom: 20px;
					}

					/* Adjust column spacing */
					.footer_columns:first-child {
						padding-left: 0;
					}

					.footer_columns:last-child {
						padding-right: 0;
					}

					/* Social Media Icons - Vertical */
					.footer_columns ul.social-icons {
						display: block;
					}

					.footer_columns ul.social-icons li {
						list-style: none;
						margin-bottom: 10px;
					}

					.footer_columns ul.social-icons a {
						font-size: 18px;
						color: white;
						transition: color 0.3s ease;
					}

					.footer_columns ul.social-icons a:hover {
						color: #f1c40f;
					}

					/* Footer Bottom Section */
					.footer_bottom {
						text-align: center;
						margin-top: 40px;
						padding-top: 20px;
						border-top: 1px solid #ffffff1a;
						font-size: 12px;
						color: #b0b0b0;
					}
				  </style>
</head>
<body>

        <!--Navigation Bar-->

        <section class="main_landing_section">
            <nav class="navbar">
                <div>
                    <img src="danidu_src/logo.png" alt="TeachConnect Logo">
                </div>

                <ul class="navbarlist">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Us</a></li>
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
        </section>
	
    <!-- FAQ -->
    <section class="faq-section">
        <h1>Frequently Asked Questions</h1>
        <p class="faq-tagline">Connecting you to the answers you need with TeachConnect.</p>
        <div class="faq-box">
            <div class="faq-item">
                <h3 class="faq-question">What is TeachConnect?</h3>
                <p class="faq-answer">TeachConnect serves as a comprehensive resource hub for educators and teachers, offering specialized courses and training in essential soft skills.</p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">Who can benefit from TeachConnect?</h3>
                <p class="faq-answer">Both experienced educators and newcomers to the profession can benefit from our courses and professional development resources.</p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">How do I enroll in a course?</h3>
                <p class="faq-answer">Simply create an account, select your course, and click Enroll.</p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">Are the courses certified?</h3>
                <p class="faq-answer">Yes, all our courses offer certificates upon successful completion.</p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">How can I access my account?</h3>
                <p class="faq-answer">You can access your account by logging in with your registered email and password from the homepage.</p>
            </div>
			<div class="faq-item">
				<h3 class="faq-question">Is there a refund policy?</h3>
				<p class="faq-answer">Yes, for refund inquiries, please contact our support team through the "Contact Us" page.</p>
			</div>
            <div class="faq-item">
                <h3 class="faq-question">Can I access the courses on mobile?</h3>
                <p class="faq-answer">Yes, TeachConnect is fully responsive and can be accessed on mobile devices.</p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">What payment methods are accepted?</h3>
                <p class="faq-answer">We accept major credit cards and online payment services such as PayPal.</p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">How do I contact support?</h3>
                <p class="faq-answer">You can contact support via the "Contact Us" page or email us at support@teachconnect.com.</p>
            </div>
            <div class="faq-item">
                <h3 class="faq-question">Do you offer discounts for bulk course registrations?</h3>
                <p class="faq-answer">Yes, we offer discounts for institutions and groups registering in bulk. Contact our support team for more details.</p>
            </div>
				<div class="faq-item">
					<h3 class="faq-question">Can trainers teach on the platform?</h3>
					<p class="faq-answer">Yes, trainers can teach on TeachConnect. You can select a trainer when registering for TeachConnect.</p>
				</div>
        </div>
    </section>
	
       <!--Footer Html Codes-->
  <footer class="footer_section">
        <div class="footer_container">
            <div class="footer_columns">
                <h4>TeachConnect</h4>
                <img src="danidu_src/logo.png" alt="Logo">
                <p>Teach. Learn. Inspire.</p>
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
                    <li><a href="#">Science</a></li>
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </div>

            <div class="footer_columns">
                <h4>Follow Us</h4>
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i> Instagram</a></li>
                </ul>
            </div>

        </div>
        <div class="footer_bottom">
            &copy; 2024 TeachConnect. All Rights Reserved.
        </div>
    </footer>

<script>
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling; 

            if (answer.classList.contains('open')) {
                answer.classList.remove('open');
                answer.style.maxHeight = "0"; 
            } else {
                answer.classList.add('open');
                answer.style.maxHeight = answer.scrollHeight + "px"; 
            }
        });
    });
</script>



</body>
</html>
