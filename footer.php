<!-- footer begin -->
<footer class="footer-light">
    <div class="container">
        <div class="row">
			<div class="col-lg-6">
                <div class="widget">
                    <a href="index.php"><img style="max-width: 200px" alt="" id="our_logo" class="logo" src="images/logo.png" /></a>
                    <div class="spacer-20"></div>
                    <p><?php echo $lang['footer_buta'] ?></p>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="widget">
                    <h5><?php echo $lang['footer_pages'] ?></h5>
                    <ul>
                        <li><a href="<?php echo 'about-us.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['footer_about'] ?></a></li>
                        <li><a href="<?php echo 'services.php?lang='.$_SESSION['lang'];?>"><?php echo mb_substr($lang['services'],0,-1,'UTF-8') ?></a></li>
                        <li><a href="<?php echo 'works.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['footer_done'] ?></a></li>
                        <li><a href="<?php echo 'our-team.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['team'] ?></a></li>
                        <li><a href="<?php echo 'contact-us.php?lang='.$_SESSION['lang'];?>"><?php echo mb_convert_case($lang['connection'], MB_CASE_TITLE, "UTF-8"); ?></a></li>
                        <li><a href="<?php echo 'news.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['news'] ?></a></li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget">
                    <h5><?php echo $lang['newsletter']; ?></h5>

                    <p><?php echo $lang['subscribe'] ?></p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"].'?lang='.$_SESSION['lang'].'#form_subscribe'); ?>" class="row" id="form_subscribe" method="post" name="form_subscribe">
                        <div class="col text-center">
                            <input class="form-control" id="name_1" name="name_1" placeholder="<?php echo $lang['email'] ?>" type="text" /> <a href="#" onclick="this.closest('form').submit();return false;" id="btn-submit"><i style="background: #3E4095;" class="arrow_right"></i></a>
                            <?php echo $message;  ?>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                    <div class="spacer-10"></div>
                    <small><?php echo $lang['email_secure'] ?></small>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 sm-text-center mb-sm-30">
                <div class="mt10">&copy; 2020 - Buta Group. <?php echo $lang['rights'] ?></div>
            </div>

            <div class="col-md-6 text-md-right text-sm-left">
                <div class="social-icons">
                    <a href="https://www.facebook.com/butagruptr/" target="_blank"><i style="background: #3E4095;" class="fa fa-facebook fa-lg"></i></a>
                    <a href="https://twitter.com/butagrup" target="_blank"><i style="background: #3E4095;" class="fa fa-twitter fa-lg"></i></a>
                    <a href="https://www.instagram.com/butagrup/" target="_blank"><i style="background: #3E4095;" class="fa fa-instagram fa-lg"></i></a>
                    <a href="https://www.linkedin.com/company/buta-grup/" target="_blank"><i style="background: #3E4095;" class="fa fa-linkedin fa-lg"></i></a>
                    <a href="https://plus.google.com/u/0/103136009122761650644/" target="_blank"><i style="background: #3E4095;" class="fa fa-google-plus fa-lg"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=905302363395" target="_blank"><i style="background: #3E4095;" class="fa fa-whatsapp fa-lg"></i></a>
                    <a href="https://www.youtube.com/channel/UCHnlDWK84ZgzQRAZgSb65aQ" target="_blank"><i style="background: #3E4095;" class="fa fa-youtube fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer close -->



<div id="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
</div>		



<!-- Javascript Files
================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/easing.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/enquire.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.plugin.js"></script>
<script src="js/typed.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/designesia.js"></script>
<script src="js/active.js"></script>



</body>

</html>