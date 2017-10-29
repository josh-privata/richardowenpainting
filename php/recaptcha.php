<?php include 'header.php'; ?>

<!-- Body -->
<body class="home loading">

<?php include 'mobile-nav.php'; ?>
<?php include 'sidebar.php'; ?>

<!-- Main Wrapper -->
<div class="wrapper">

    <?php include 'menu.php'; ?>

    <!-- Start Content -->
    <div class="content">

        <!-- Start Container -->
        <div class="container">

            <!-- ReCapture AutoLoad -->
            <?php require_once __DIR__ . '/php/recaptcha/autoload.php';
            $siteKey = ''; // visit https://www.google.com/recaptcha/admin to generate keys
            $secret = '';
            $lang = 'en'; // reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
            ?>

            <!-- ReCapture -->
            <section class="section section-text text-center">
                <div class="animate-up animated">
                    <h2 class="section-title">You're not a bot? Aren't you?</h2>
                    <div class="section-box">
                        <?php
                        if ($siteKey === '' || $secret === ''): ?>
                            <h4>Add your keys</h4>
                            <p>If you do not have keys already then visit
                                <a href="https://www.google.com/recaptcha/admin">
                                    https://www.google.com/recaptcha/admin</a> to generate them.<br/>
                                Edit <strong>recaptcha.php</strong> file and set the respective keys in
                                <strong>$siteKey</strong> and
                                <strong>$secret</strong>. Reload the page after this.</p>
                            <?php
                        elseif (isset($_POST['g-recaptcha-response'])):
                            $recaptcha = new \ReCaptcha\ReCaptcha($secret);
                            $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
                            if ($resp->isSuccess()):
                                // If the response is a success, that's it!
                                ?>
                                <h3>Congratulation!</h3>
                                <p>Your email was sent successfully! <a href="../index.php">Go Back</a></p>
                                <?php

                                require_once __DIR__ . '/php/mailsender.php';
                            else:
                                // If it's not successful, then one or more error codes will be returned.
                                ?>
                                <p>Something went wrong <a href="../index.php">please try again</a>.</p>
                                <?php
                            endif;
                        else:
                            // Add the g-recaptcha tag to the form you want to include the reCAPTCHA element
                            ?>
                            <p>Complete the reCAPTCHA then submit the form.</p>
                            <form action="" method="post">
                                <input type="hidden" value="<?php echo $_POST['rsName']; ?>" name="rsName">
                                <input type="hidden" value="<?php echo $_POST['rsEmail']; ?>" name="rsEmail">
                                <input type="hidden" value="<?php echo $_POST['rsSubject']; ?>" name="rsSubject">
                                <input type="hidden" value="<?php echo $_POST['rsMessage']; ?>" name="rsMessage">

                                <div class="input-field">
                                    <div class="g-recaptcha " data-sitekey="<?php echo $siteKey; ?>"></div>
                                    <script type="text/javascript"
                                            src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>"></script>
                                </div>
                                <input type="submit" class="btn btn-lg btn-primary" value="Submit"/>
                                </span>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <?php include 'contact.php'; ?>

            <!-- End Container -->
        </div>
        <!-- End Content -->
    </div>
    <!-- End Main Wrapper -->
</div>

<?php include 'footer.php'; ?>

<!-- End Body -->
</body>
<!-- End Html -->
</html>