
    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>Bolster Campus, Kottakkal, Kerala, India</li>
                            <li><i class="fas fa-phone"></i><a href="tel:+919605407019" style="text-decoration: none;">+91 9605 407 019</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:+919605407021" style="text-decoration: none;">+91 9605 407 021</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:office@aria.com" style="text-decoration: none;">info@bolstercampus.in</a></li>
                        </ul>
                        <h3>Follow Bolster</h3>

                        <span class="fa-stack">
                            <a href="https://www.facebook.com/bolstercampus">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                       
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/bolstergirlscampus/">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <!-- <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span> -->
                        <!-- <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-behance fa-stack-1x"></i>
                            </a>
                        </span> -->

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
 
  <!-- Contact Form -->
  <form id="contactForm" data-toggle="validator" data-focus="false" method="post" action="">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" name="name" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" name="email" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" name="message" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>
                            I agree to get contacted by the team. 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button" name="submit" id="submit">SEND</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->
    <script src="js/jquery.min.js"></script> 
    <script>
    $("#submit").click(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "contact-form-send.php",
        data: { 
            name: $('#cname').val(), // < note use of 'this' here
            email: $('#cemail').val(),
            message: $('#cmessage').val(),
        },
        success:function(res){
            location.reload();
        }
    });
});
    
    </script>