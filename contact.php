<!-- Contact Form -->
<section id="contact" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
        <div class="row">

            <!-- Keep in touch with us -->
            <div class="col-md-12 text-center grey">
                <h2 class="service-title pad-bt15">Feel free to contact us</h2>
                <p class="sub-title pad-bt15">
                    We would love to hear from you !
                </p>
                <hr class="bottom-line white-bg">
            </div>

            <!-- Address -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="location-info black">
                    <h4><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>8 Norris Street<br>Cairns, Qld 4870</h4><br/>
                    <h4><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>richardowenpainting@gmail.com</h4><br/><br/>
                    <h4><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+61 666 666 666</h4>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>

                    <!-- Begin Form -->
                    <form action="php/mailsender.php" method="post" role="form" class="contactForm">
                        <!-- Name -->
                        <div class="col-md-6 padding-right-zero">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                       placeholder="Your Name" data-rule="minlen:4"
                                       data-msg="Please enter at least 4 chars"/>
                                <div class="validation"></div>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" data-rule="email"
                                       data-msg="Please enter a valid email"/>
                                <div class="validation"></div>
                            </div>
                        </div>
                        <!-- Subject -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject" data-rule="minlen:4"
                                       data-msg="Please enter at least 8 chars of subject"/>
                                <div class="validation"></div>
                            </div>
                        </div>
                        <!-- Message -->
                        <div class="col-md-12">
                            <div class="form-group">
                                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                                                  data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <button class="btn btn-primary btn-submit">Send Now</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>