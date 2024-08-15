<?php
include ('headers.php');
?>
    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="info-title">Contact Information</h2>
                <h3 class="info-sub-title">Fill up the form and our Team will get back to you within 24 hours</h3>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt">  <img src="call.png" alt="@instagram" height=30px width=25px align="center"></i>
                        <span>Phone:</span> <a href="+917804984824">+917804984824</a>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"> <img src="gmail.png" alt="@instagram" height=30px width=25px align="center"></i>
                        <span>Email:</span> <a href="kuldeepharinkhede512@gmail.com">kuldeep@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"> <img src="web.png" alt="@instagram" height=30px width=25px align="center"></i>
                        <span>Website:</span> <a href="bgtcoders.in">bgtcoders.in</a>
                    </li>
                </ul>
                <ul class="social-icons">
                    <li><a href="https://www.instagram.com/"><i class="fab fa-facebook"> <img src="instagram 2.png" alt="@instagram" height=30px width=25px align="center"></i></a></li>
                    <li><a href="https://www.facebook.com/kuldeep.harinkhede.94"><i class="fab fa-twitter"> <img src="facebook 2.png" alt="@instagram" height=30px width=30px align="center"></i></a></li>
                    <li><a href="https://twitter.com/home?lan"><i class="fab fa-linkedin-in"> <img src="twitter.png" alt="@instagram" height=30px width=25px align="center"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/kuldeepharinkhede-53603521b/?originalSubdomain=in"><i class="fab fa-linkedin-in"> <img src="linkedin.png" alt="@instagram" height=30px width=25px align="center"></i></a></li>
               
                </ul>
            </div>
            <div class="form-wrap">
                <form action="contactdata.php" method="POST">
                    <h2 class="form-title">Send us a message</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text"  name="fname"class="fname" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text"  name="lname"class="lname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="email" placeholder="Mail">
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" class="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea  type="text"name="message" id="" placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="submit-button" name="submit" alert="submit successfully">
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>
<?php include ('fotter.php');?>