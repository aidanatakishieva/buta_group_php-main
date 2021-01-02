<?php
$index = 'class="aktiv"';
$about = '';
$services = '';
$works = '';
$news = '';
$team = '';
include_once "header.php";
?>
    <!-- content begin -->
    <div class="no-bottom no-top anm" data-spped-x='16' data-spped-y='-2' data-spped-scale='50' data-spped-rotate='-25' data-spped-opacity='50' id="content">
    <div id="top"></div>
    <section data-bgimage="url(images/background/1.png) bottom" class="full-height vertical-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 wow fadeInRight" data-wow-delay=".5s">

                    <div class="h1">
                        <div class="typed-strings">
                            <p><span style="color: #3E4095; font-size: 37px;" class="id-color"><?php echo $lang['typed1'] ?></span></p>
                            <p><span style="color: #3E4095; font-size: 37px;" class="id-color"><?php echo $lang['typed2'] ?></span></p>
                            <p><span style="color: #3E4095; font-size: 37px;" class="id-color"><?php echo $lang['typed3'] ?></span></p>
                        </div>
                        <div class="typed"></div>
                    </div>

                    <p class="lead"><?php echo $lang['lead'] ?></p>
                    <div class="spacer-20"></div>
                    <a class="btn-custom" style="background: #3E4095;" href="<?php echo 'about-us.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['index_about'] ?></a>&nbsp;
                    <div class="mb-sm-30"></div>
                </div>

                <div class="col-lg-6 offset-lg-1 wow fadeInLeft" data-wow-delay=".5s">
                    <img src="images/misc/3.png" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section id="section-highlight" class="no-top" data-bgimage="url(images/background/3b.png) top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="text-center">
                        <h3 style="font-size: 30px;"><?php echo $lang['highlight'] ?></h3>
                        <h6><?php echo $lang['highlight2'] ?></h6>
                        <div class="spacer-20"></div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 90px;">
                <div class="col-lg-4 col-md-6 mb30 wow fadeInRight" data-wow-delay="0s">
                    <div class="f-box f-icon-left f-icon-rounded">
                        <i class="fa fa-laptop bg-color-3 text-light" id="hover_bg"></i>
                        <div class="fb-text">
                            <h4><?php echo $lang['h1'] ?></h4>
                            <p><?php echo $lang['h1_p'] ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb30 wow fadeInRight" data-wow-delay=".25s">
                    <div class="f-box f-icon-left f-icon-rounded">
                        <i class="fa fa-paper-plane-o bg-color-2 text-light"></i>
                        <div class="fb-text">
                            <h4><?php echo $lang['h2'] ?></h4>
                            <p><?php echo $lang['h2_p'] ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb30 wow fadeInRight" data-wow-delay=".5s">
                    <div class="f-box f-icon-left f-icon-rounded">
                        <i class="fa fa-line-chart bg-color text-light"></i>
                        <div class="fb-text">
                            <h4><?php echo $lang['h3'] ?></h4>
                            <p><?php echo $lang['h3_p'] ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="section-text" class="no-top" data-bgimage="url(images/background/3d.png) top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block d-xl-block text-center wow fadeInRight"
                    data-wow-delay="0s">
                    <img class="relative img-fluid" src="images/misc/4.png" alt="" />
                </div>

                <div class="col-lg-5 offset-md-1 wow fadeInLeft" data-wow-delay="0s">
                    <h2 style="font-size: 30px;"><?php echo $lang['main'] ?></h2>
                    <p class="lead"><?php echo $lang['main_lead'] ?></p>
                    <div class="spacer-half"></div>
                    <a style="background: #3E4095;" class="btn-custom" href="<?php echo 'about-us.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['index_about'] ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="section-fun-facts" style="background: #342a6d;" class="pt60 pb60 text-light bg-color-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0s">
                    <div class="de_count">
                        <h3 class="timer" data-to="26" data-speed="3000"></h3>
                        <span><?php echo $lang['counter1'] ?></span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".25s">
                    <div class="de_count">
                        <h3 class="timer" data-to="8" data-speed="3000">0</h3>
                        <span><?php echo $lang['counter2'] ?></span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="de_count">
                        <h3 class="timer" data-to="18" data-speed="3000">0</h3>
                        <span><?php echo $lang['counter3'] ?></span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".75s">
                    <div class="de_count">
                        <h3 class="timer" data-to="472" data-speed="3000">0</h3>
                        <span><?php echo $lang['counter4'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="spacer-20"></div>
    <div class="spacer-20"></div>
    <div class="spacer-20"></div>
    <div class="spacer-20"></div>
    <div class="spacer-20"></div>
    <section id="section-services" data-bgcolor="#F6F7FB">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 wow animated fadeInUp" data-wow-delay=".5s">
                    <form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">
                <div class="col-md-12 text-center">
                    <h1 style="font-size: 40px;"><?php echo $lang['team'] ?></h1>                
                </div>
                <div class="clearfix"></div>
                    </form>
                </div>
            </div>    
        </div>
    </section>
    <section class="no-top pos-top" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow animated fadeInLeft" data-wow-delay=".7s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                                <div class="fpwo-wrap">
                                    <div class="fpwow-icons">
                                        <a href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>                                  
                            <div class="fpw-overlay-btm"></div>
                            <img src="images/img/first.gif" class="fp-image img-fluid" alt="">
                        </div>

                        <h4><?php echo $lang['t1'] ?></h4>
                        <?php echo $lang['t1_p'] ?>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow animated fadeInUp" data-wow-delay=".9s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                                <div class="fpwo-wrap">
                                    <div class="fpwow-icons">
                                        <a href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>                                  
                            <div class="fpw-overlay-btm"></div>
                            <img src="images/img/second.gif" class="fp-image img-fluid" alt="">
                        </div>

                        <h4><?php echo $lang['t2'] ?></h4>
                        <?php echo $lang['t2_p'] ?>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow animated fadeInUp" data-wow-delay=".9s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                                <div class="fpwo-wrap">
                                    <div class="fpwow-icons">
                                        <a href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>                                  
                            <div class="fpw-overlay-btm"></div>
                            <img src="images/img/third.gif" class="fp-image img-fluid" alt="">
                        </div>

                        <h4><?php echo $lang['t3'] ?></h4>
                        <?php echo $lang['t3_p'] ?>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6 mb30 wow animated fadeInRight" data-wow-delay=".7s">
                    <div class="f-profile text-center">
                        <div class="fp-wrap f-invert">
                            <div class="fpw-overlay">
                                <div class="fpwo-wrap">
                                    <div class="fpwow-icons">
                                        <a href="#" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                                        <a href="#" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>                                  
                            <div class="fpw-overlay-btm"></div>
                            <img src="images/img/fourth.gif" class="fp-image img-fluid" alt="">
                        </div>

                        <h4><?php echo $lang['t4'] ?></h4>
                        <?php echo $lang['t4_p'] ?>
                    </div>
                </div>
                <div class="spacer-10"></div>
                <div class="spacer-10"></div>
                <div class="spacer-10"></div>

                <div class="col-lg-6 offset-lg-3 wow animated fadeInUp" data-wow-delay=".9s">
                    <div class="text-center">
                        <a style="background: #3E4095;" class="btn-custom" href="<?php echo 'our-team.php?lang='.$_SESSION['lang'];?>"><?php echo $lang["all_team"] ?></a>
                    </div>
                </div>
    </section>
    <section id="section-services" data-bgcolor="#F6F7FB">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 wow animated fadeInUp" data-wow-delay="0s">
                    <div class="text-center">
                        <h2><?php echo $lang['index_done'] ?></h2>
                        <div class="spacer-10"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb30 animated wow fadeInLeft" data-wow-delay=".5s">
                    <div class="de-image-hover rounded">
                        <a href="images/img/1.png" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title"><?php echo $lang['index_title'] ?></span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="images/img/1.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mb30 wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="de-image-hover rounded">
                        <a href="images/img/2.png" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title"><?php echo $lang['index_title'] ?></span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="images/img/2.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mb30 wow animated fadeInRight" data-wow-delay=".5s">
                    <div class="de-image-hover rounded">
                        <a href="images/img/3.png" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title"><?php echo $lang['index_title'] ?></span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="images/img/3.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mb30 wow animated fadeInLeft" data-wow-delay=".9s">
                    <div class="de-image-hover rounded">
                        <a href="images/img/4.png" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title"><?php echo $lang['index_title'] ?></span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="images/img/4.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mb30 wow animated fadeInUp" data-wow-delay=".9s">
                    <div class="de-image-hover rounded">
                        <a href="images/img/5.jpg" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title"><?php echo $lang['index_title'] ?></span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="images/img/5.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mb30 wow animated fadeInRight" data-wow-delay=".9s">
                    <div class="de-image-hover rounded">
                        <a href="images/img/6.png" class="image-popup">
                            <span class="dih-title-wrap">
                                <span class="dih-title"><?php echo $lang['index_title'] ?></span>
                            </span>
                            <span class="dih-overlay"></span>
                            <img src="images/img/6.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>


                <div class="col-lg-6 offset-lg-3 wow animated fadeInUp" data-wow-delay=".7s">
                    <div class="text-center">
                        <a style="background: #3E4095;" class="btn-custom" href="<?php echo 'works.php?lang='.$_SESSION['lang'];?>"><?php echo $lang["index_works"] ?></a>
                    </div>
                </div>

            </div>
    </section>

    <section id="section-banner" class="no-top" data-bgimage="url(images/background/3.png) top">
        <div class="container">
            <div class="row align-items-center">
                <div class="spacer-double"></div>

                <h2 style="margin: auto;" class="wow animated fadeInUp" data-wow-delay=".9s"><?php echo $lang['index_refs'] ?></h2>

                <div class="col-md-12 wow fadeInUp animated" data-wow-delay=".5s" style="margin-top: 100px;">
                    <div id="owl-logo" class="logo-carousel owl-carousel owl-theme">
                        <img src="images/img/agrobay.png" class="img-fluid" alt="" />
                        <img src="images/img/1234567.png" class="img-fluid" alt="" />
                        <img src="images/img/togo1234.png" class="img-fluid" alt="" />
                        <img src="images/img/binsaat.png" class="img-fluid" alt="" />
                        <img src="images/img/hasanbeyciftligi.png" class="img-fluid" alt="" />
                        <img src="images/img/ozgun.png" class="img-fluid" alt="" />
                        <img src="images/img/senbay.png" class="img-fluid" alt="" />
                        <img src="images/img/senbayp.png" class="img-fluid" alt="" />
                    </div>
                    <div  style="text-align: center; margin-top: 100px;"> <a style="background: #3E4095;" class="btn-custom" href="<?php echo 'about-us.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['all_refs'] ?></a></div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- content close -->
<?php include_once "footer.php" ?>


<script>
    $(function () {
        // jquery typed plugin
        $(".typed").typed({
            stringsElement: $('.typed-strings'),
            typeSpeed: 100,
            backDelay: 1500,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function () { null; },
            resetCallback: function () { newTyped(); }
        });
    }); 
 
</script>
