<?php
include_once "send_email.php";
session_start();
$langs = array('az','tr','rus','en');
$_SESSION['lang'] = 'az';
if(isset($_GET['lang']) && $_GET['lang']!=''){
    if(in_array($_GET['lang'], $langs)){       
      $_SESSION['lang'] = $_GET['lang']; // Set session
    }
}

include('lang/'.$_SESSION['lang'].'.php');
$language1 = "";
$language2 = "";
$language3 = "";
$language4 = "";

switch ($_SESSION['lang']) {
    case 'az':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='images/azerbaijan.png' alt='az'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;' src='images/turkey.png' alt='tr'/></a>";
        $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=rus' id='rus'><img style='width: 20px;height: 20px;' src='images/russia.png' alt='rus'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;' src='images/united-kingdom.png' alt='en'/></a>";
        break;
    case 'tr':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;' src='images/turkey.png' alt='tr'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='images/azerbaijan.png' alt='az'/></a>";
        $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=rus' id='rus'><img style='width: 20px;height: 20px;' src='images/russia.png' alt='rus'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;' src='images/united-kingdom.png' alt='en'/></a>";
        break;
    case 'rus':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=rus' id='rus'><img style='width: 20px;height: 20px;' src='images/russia.png' alt='rus'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;' src='images/turkey.png' alt='tr'/></a>";
        $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='images/azerbaijan.png' alt='az'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;' src='images/united-kingdom.png' alt='en'/></a>";
        break;
    case 'en':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;' src='images/united-kingdom.png' alt='en'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;' src='images/turkey.png' alt='tr'/></a>";
        $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=rus' id='rus'><img style='width: 20px;height: 20px;' src='images/russia.png' alt='rus'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='images/azerbaijan.png' alt='az'/></a>";
        break;
}
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">

<head>
<meta charset="utf-8" />
<title><?php echo $lang['header_title'] ?></title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="Buta Grup Medya Bilişim Teknoloji A.Ş. tam kapsamlı bilişim grubudur." name="description" />
<meta content="buta,web tasarım,ar-ge,yazılım,dijital pazarlama,stratejik planlama, grafik tasarım" name="keywords" />
<meta content="Buta Grup" name="author" />

<!-- favicon -->
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico" />
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<link rel="icon" href="favicon.ico" />

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->

<!-- CSS Files
================================================== -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="css/owl.theme.css" rel="stylesheet" type="text/css">
<link href="css/owl.transitions.css" rel="stylesheet" type="text/css">
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="css/jquery.countdown.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/main.css" rel="stylesheet" />


<!-- color scheme -->
<link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
<link href="css/coloring.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="wrapper">
<!-- header begin -->
<header class="header-light transparent scroll-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class="align-self-center header-col-left">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>">
								<img id="our_logo" style="max-width: 200px" alt="" src="images/logo.png" />
							</a>
                        </div>
                        <!-- logo close -->
                    </div>
                    <div class="align-self-center ml-auto header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li>
                                <a <?php echo $index ?> href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['home'] ?></a>
                            </li>
                            <li>
                                <a <?php echo $about ?> href="<?php echo 'about-us.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['about'] ?></a>
                            </li>
                            <li>
                                <a <?php echo $services ?> href="<?php echo 'services.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['services'] ?></a>
                            </li>
                            <li>
                                <a <?php echo $works ?> href="<?php echo 'works.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['works'] ?></a>
                            </li>
                            <li>
                                <a <?php echo $news ?> href="<?php echo 'news.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['news'] ?></a>
                            </li>
                            <li>
                                <a <?php echo $team ?> href="<?php echo 'our-team.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['team'] ?></a>
                            </li>
                            <li>
                                <?php echo $language1 ?>
                                <ul id="flags">
                                    <li>
                                        <?php echo $language2 ?>
                                    </li>
                                    <li>
                                        <?php echo $language3 ?>
                                    </li>
                                    <li>
                                        <?php echo $language4 ?>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="align-self-center ml-auto header-col-right mobile">
                        <a style="background: #3E4095;" class="btn-custom" href="<?php echo 'contact-us.php?lang='.$_SESSION['lang'];?>"><?php echo  mb_convert_case($lang['connection'], MB_CASE_TITLE, "UTF-8"); ?></a>
                        <span id="menu-btn"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->