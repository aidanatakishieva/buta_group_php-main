<?php
$index = '';
$about = 'class="aktiv"';
$services = '';
$works = '';
$news = '';
$team = '';


include_once "header.php";
?>
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <!-- section begin -->
    
    <section class="full-height vertical-center" data-bgimage="url(images/background/5.png) bottom" style="min-height: 554px; background-size: cover;">
            <div class="container" style="background-color: cover">
                <div class="row align-items-center" style="background-color: cover">
                    <div class="col-lg-6 wow fadeInRight animated" data-wow-delay=".5s" style="background-size: cover; visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                        <div class="text-left">
                            <h1 style="font-size: 37px;"><?php echo  mb_convert_case($lang['about_header'], MB_CASE_TITLE, "UTF-8"); ?></h1>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft animated" id="about_misc_photo" data-wow-delay=".5s" style='
                    background: url("images/misc/6.png");height: 55vh; background-size: cover; visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;' data-bgimage="url(images/misc/6.png)">
                    </div> 
                    <div class="clearfix"></div> 
                </div>
            </div>
    </section>
    <!-- section close -->


    <section class="no-top" data-bgimage="url(images/background/6.png) center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 wow fadeInLeft animated" data-wow-delay=".5s">
                    <img src="images/misc/1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 offset-md-1 wow fadeInRight" data-wow-delay=".5s">
                    <h3><?php echo $lang['differs_us'] ?></h3>
                    <p><?php echo $lang['about_us_main'] ?></p>

                </div>
            </div>

            <div class="spacer-double"></div>
            <div class="spacer-double"></div>

            <div class="row align-items-center">
                <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".5s">
                    <h3><?php echo $lang['differs_us'] ?></h3>
                    <p><?php echo $lang['about_us_main2'] ?></p>

                </div>

                <div class="col-md-5 offset-md-1 wow animated fadeInLeft" data-wow-delay=".5s">
                    <img src="images/misc/5.png" class="img-fluid" alt="">
                </div>
            </div>

            <div class="spacer-double"></div>

            <section id="section-banner" class="no-top" data-bgimage="url(images/background/3.png) top">
        <div class="container">
            <div class="row align-items-center">
                <div class="spacer-double"></div>

                <h2 style="margin: auto; font-size: 30px;" class="wow animated fadeInUp" data-wow-delay=".5s"><?php echo $lang['index_refs'] ?></h2>

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
                    <div style="text-align: center; margin-top: 100px;"> <a style="background: #3E4095;" class="btn-custom" href="<?php echo 'works.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['all_refs'] ?></a></div>
                </div>
            </div>
        </div>
    </section>

        </div>

    </section>

    <section class="pt60 pb60 bg-color-2 text-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                    <h3 class="no-bottom"><?php echo $lang['about_journey'] ?></h3>
                </div>

                <div class="col-md-4 text-lg-right text-sm-center">
                    <a href="<?php echo 'services.php?lang='.$_SESSION['lang'];?>" class="btn-custom capsule med"><?php echo $lang['about_journey_begin'] ?></a>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- content close -->

<?php include_once "footer.php" ?>