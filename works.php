<?php
$index = '';
$about = '';
$services = '';
$works = 'class="aktiv"';
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
                            <h1 style="font-size: 37px;"><?php echo $lang['works_header'] ?></h1>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft animated" data-wow-delay=".5s" style='
                    background: url("images/misc/4.png");height: 50vh; background-size: cover; visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;' data-bgimage="url(images/misc/4.png)">
                    </div> 
                    <div class="clearfix"></div> 
                </div>
            </div>
    </section>
    <!-- section close -->
    <section class="no-top pos-top relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge wow animated bounceInUp" data-wow-delay=".1s"></div>
                            <div class="timeline-panel">
                                <div class="timeline-body">
                                    <div class="row">
                                        <div class="col-md-6 timeline-pic wow fadeInLeft animated" data-wow-delay=".5s" style="background-size: cover; visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;" data-bgimage="url(images/works/w1.png)">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="timeline-story">
                                                <h5 class="wow fadeInRight animated" data-wow-delay=".9s" style=" visibility: visible; animation-delay: 0.9s; animation-name: fadeInRight;">2018</h5>
                                                <div class="clearfix"></div>
                                                <div class="wow fadeInUp animated"  data-wow-delay=".7s" style="background-size: cover; visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;" >
                                                    <h4>Özgün İnşaat</h4>
                                                    <p>
                                                        <?php echo $lang['w1'] ?><br/>
                                                        <a style="padding:3px 7px;border-radius: 20px;color:#fff;background: #292ba0;" href="http://www.ozguninsaat.com/" target="_blank"><?php echo
                                                        $lang['browse'] ?></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge wow animated bounceInUp" data-wow-delay=".1s"></div>
                            <div class="timeline-panel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="timeline-story">
                                            <h5 class="wow fadeInLeft animated" data-wow-delay="1.2s" style=" visibility: visible; animation-delay: 1.2s; animation-name: fadeInLeft;">2018</h5>
                                            <div class="clearfix"></div>
                                            <div class="wow fadeInUp animated"  data-wow-delay=".9s" style="background-size: cover; visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;" >
                                                <h4>Bayburt Group</h4>
                                                <p>
                                                    <?php echo $lang['w2'] ?><br/>
                                                    <a style="padding:3px 7px;border-radius: 20px;color:#fff;background: #292ba0;" href="http://bayburtgrup.com.tr/" target="_blank"><?php echo $lang['browse'] ?></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 timeline-pic wow fadeInRight animated" data-wow-delay=".7s" style="background-size: cover; visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;" data-bgimage="url(images/works/w2.png )">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge wow animated bounceInUp" data-wow-delay=".1s"></div>
                            <div class="timeline-panel">
                                <div class="timeline-body">
                                    <div class="row">
                                        <div class="col-md-6 timeline-pic wow fadeInLeft animated" data-wow-delay=".9s" style="background-size: cover; visibility: visible; animation-delay: 0.9s; animation-name: fadeInLeft;" data-bgimage="url(images/works/w3.png)">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="timeline-story">
                                                <h5 class="wow fadeInRight animated" data-wow-delay="1.4s" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeInRight;">2020</h5>
                                                <div class="clearfix"></div>
                                                <div class="wow fadeInUp animated"  data-wow-delay="1.2s" style="background-size: cover; visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
                                                    <h4>Şenbay Madencilik</h4>
                                                    <p>
                                                        <?php echo $lang['w3'] ?><br/>
                                                        <a style="padding:3px 7px;border-radius: 20px;color:#fff;background: #292ba0;" href="http://www.senbay.com.tr/" target="_blank"><?php echo $lang['browse'] ?></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge wow animated bounceInUp" data-wow-delay=".1s"></div>
                            <div class="timeline-panel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="timeline-story">
                                            <h5 class="wow fadeInLeft animated" data-wow-delay="1.6s" style="visibility: visible; animation-delay: 1.6s; animation-name: fadeInLeft;">2020</h5>
                                            <div class="clearfix"></div>
                                            <div class="wow fadeInUp animated" data-wow-delay="1.4s" style="background-size: cover; visibility: visible; animation-delay: 1.4s; animation-name: fadeInUp;">
                                                <h4>Bayburt Enerji</h4>
                                                <p>
                                                    <?php echo $lang['w4'] ?><br/>
                                                    <a style="padding:3px 7px;border-radius: 20px;color:#fff;background: #292ba0;" href="bayburtenerji.com" target="_blank"><?php echo $lang['browse'] ?></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 timeline-pic wow fadeInRight animated" data-wow-delay=".5s"
                                    style="background-size: cover;visibility: visible;animation-delay: 1.2s;animation-name: fadeInRight;" data-bgimage="url(images/works/w4.png)">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
</div>
<!-- content close -->
<?php include_once "footer.php" ?>