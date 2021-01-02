<?php
$index = '';
$about = '';
$services = 'class="aktiv"';
$works = '';
$news = '';
$team  = '';
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
							<h1 style="font-size: 37px;"><?php echo $lang['services_header'] ?></h1>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft animated" id="about_misc_photo" data-wow-delay=".5s" style='
                    background: url("images/misc/2.png");height: 60vh; background-size: cover; visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;' data-bgimage="url(images/misc/2.png)">
                    </div> 
                    <div class="clearfix"></div> 
                </div>
            </div>
    </section>
    <!-- section close -->
	<div class="spacer-20"></div>
	<section class="no-top">
		<div class="container">
            <div class="row">
			
				<div class="col-lg-4 col-md-6 mb30 wow fadeInLeft animated" data-wow-delay=".5s"
                style="background-size: cover; visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
					<div class="feature-box f-boxed style-3">
                        <i class="bg-color i-circle fa fa-laptop"></i>
                        <div class="text">
                            <?php echo $lang['s1'] ?>
                        </div>
						<i class="wm fa fa-laptop"></i>
                    </div>
				</div>
				
				<div class="col-lg-4 col-md-6 mb30 wow fadeInLeft animated" data-wow-delay=".7s"
                style="background-size: cover; visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">
					<div class="feature-box f-boxed style-3">
                        <i class="bg-color i-circle fa fa-line-chart"></i>
                        <div class="text">
                            <?php echo $lang['s2'] ?>                                
                        </div>
						<i class="wm fa fa-line-chart"></i>
                    </div>
				</div>
				
				<div class="col-lg-4 col-md-6 mb30 wow fadeInLeft animated" data-wow-delay=".9s"
                style="background-size: cover; visibility: visible; animation-delay: 0.9s; animation-name: fadeInLeft;">
					<div class="feature-box f-boxed style-3">
                        <i class="bg-color i-circle fa fa-diamond"></i>
                        <div class="text">
                            <?php echo $lang['s3'] ?> 
                        </div>
						<i class="wm fa fa-diamond"></i>
                    </div>
				</div>
				
				<div class="col-lg-4 col-md-6 mb30 wow fadeInRight animated" data-wow-delay=".5s"
                style="background-size: cover; visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
					<div class="feature-box f-boxed style-3">
                        <i class="bg-color i-circle fa fa-object-group"></i>
                        <div class="text">
                            <?php echo $lang['s4'] ?>
                        </div>
						<i class="wm fa fa-object-group"></i>
                    </div>
				</div>
				
				<div class="col-lg-4 col-md-6 mb30 wow fadeInRight animated" data-wow-delay=".7s"
                style="background-size: cover; visibility: visible; animation-delay: 0.7s; animation-name: fadeInRight;">
					<div class="feature-box f-boxed style-3">
                        <i class="bg-color i-circle fa fa-hdd-o"></i>
                        <div class="text">
                            <?php echo $lang['s5'] ?>                    
                        </div>
						<i class="wm fa fa-hdd-o"></i>
                    </div>
				</div>

				<div class="col-lg-4 col-md-6 mb30 wow fadeInRight animated" data-wow-delay=".9s"
                style="background-size: cover; visibility: visible; animation-delay: 0.9s; animation-name: fadeInRight;">
					<div class="feature-box f-boxed style-3">
                        <i class="bg-color i-circle fa 	fa-pie-chart"></i>
                        <div class="text">
                            <?php echo $lang['s6'] ?>                               
                        </div>
						<i class="wm fa fa-pie-chart"></i>
                    </div>
				</div>	
				
			<div>
		</div>	
	</section>

    <section data-bgimage="url(images/background/7.png) center">
		<div class="container">
			<div class="row">
				<div class="col-md-6 wow fadeInRight animated" id="contact_us" data-wow-delay=".5s"
                style="background-size: cover; visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
					<?php echo $lang['more_info'] ?>
				</div>
				
				<div class="col-md-6 text-lg-center text-sm-center wow fadeInLeft animated" data-wow-delay=".5s"
                style="background-size: cover; visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
					<?php echo $lang['tel'] ?>
				</div>
			</div>
		</div>
	</section>
	
	<section id="section-fun-facts" class="pt40 pb40 text-light bg-color-3">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 wow animated fadeInUp" data-wow-delay=".5s">
                    <div class="de_count">
                        <h3 class="timer" data-to="26" data-speed="2000">0</h3>
                        <span><?php echo $lang['counter1'] ?></span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow animated fadeInUp" data-wow-delay=".7s">
                    <div class="de_count">
                        <h3 class="timer" data-to="8" data-speed="2000">0</h3>
                        <span><?php echo $lang['counter2'] ?></span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow animated fadeInUp" data-wow-delay=".9s">
                    <div class="de_count">
                        <h3 class="timer" data-to="18" data-speed="2000">0</h3>
                        <span><?php echo $lang['counter3'] ?></span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 wow animated fadeInUp" data-wow-delay="1.2s">
                    <div class="de_count">
                        <h3 class="timer" data-to="472" data-speed="2000">0</h3>
                        <span><?php echo $lang['counter4'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- content close -->

<?php include_once "footer.php" ?>