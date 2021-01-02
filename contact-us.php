<?php
$index = '';
$about = '';
$services = '';
$works = '';
$news = '';
$team = '';
session_start();
$langs = array('az','tr','rus','en');
$_SESSION['lang'] = 'az';
if(isset($_GET['lang']) && $_GET['lang']!=''){
    if(in_array($_GET['lang'], $langs)){       
      $_SESSION['lang'] = $_GET['lang']; // Set session
    }
}

include('lang/'.$_SESSION['lang'].'.php');
$message = "";
require_once "config.php";
$sql = "INSERT INTO messages(name,email,subject,message) VALUES (?,?,?,?)"; 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if($stmt = mysqli_prepare($link,$sql)){
        mysqli_stmt_bind_param($stmt,"ssss",$param_name,$param_email,$param_subject,$param_message);
        $param_name = $_POST["name"];
        $param_email = $_POST["email"];
        $param_subject = $_POST["subject"];
        $param_message = $_POST["message"];


        if(mysqli_stmt_execute($stmt)){
            // header('location: services.php#form_subscribe');
            $message = "Mesajınız uğurla göndərildi.";

        }else{
            $message = "Üzr istəyirik, bu dəfə mesajınızı göndərərkən xəta baş verdi.";
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
$language1 = "";
$language2 = "";
$language3 = "";
$language4 = "";

switch ($_GET['lang']) {
    case 'az':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='images/azerbaijan.png' alt='az'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='az'><img style='width: 20px;height: 20px;' src='images/turkey.png' alt='az'/></a>";
        $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=rus' id='az'><img style='width: 20px;height: 20px;' src='images/russia.png' alt='az'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='az'><img style='width: 20px;height: 20px;' src='images/united-kingdom.png' alt='az'/></a>";
        break;
    case 'tr':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=tr' id='az'><img style='width: 20px;height: 20px;' src='images/turkey.png' alt='az'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='images/azerbaijan.png' alt='az'/></a>";
        $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=rus' id='az'><img style='width: 20px;height: 20px;' src='images/russia.png' alt='az'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='az'><img style='width: 20px;height: 20px;' src='images/united-kingdom.png' alt='az'/></a>";
        break;
    case 'rus':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=rus' id='az'><img style='width: 20px;height: 20px;' src='images/russia.png' alt='az'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='az'><img style='width: 20px;height: 20px;' src='images/turkey.png' alt='az'/></a>";
        $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='images/azerbaijan.png' alt='az'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='az'><img style='width: 20px;height: 20px;' src='images/united-kingdom.png' alt='az'/></a>";
        break;
    case 'en':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=en' id='az'><img style='width: 20px;height: 20px;' src='images/united-kingdom.png' alt='az'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='az'><img style='width: 20px;height: 20px;' src='images/turkey.png' alt='az'/></a>";
        $language3 = "<a style='padding: 0 0 0 9px;' href='?lang=rus' id='az'><img style='width: 20px;height: 20px;' src='images/russia.png' alt='az'/></a>";
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
                                <img style="width: 210px" alt="" src="images/logo.png" />
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
                    <div class="align-self-center ml-auto header-col-right">
                        <a style="background: #3E4095;" class="btn-custom" href="<?php echo 'contact-us.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['connection']; ?></a>
                        <span id="menu-btn"></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    
    <!-- section begin -->
    <section id="subheader" data-bgimage="url(images/background/5.png) bottom">
            <div class="center-y relative text-center" data-scroll-speed="4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <form action='blank.php' class="row" id='form_subscribe' method="post" name="myForm">
                        <div class="col-md-12 text-center">
                            <h1><?php echo $lang['contact-us_header'] ?></h1>
                            
                        </div>
                        <div class="clearfix"></div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section close -->
    <section class="no-top" data-bgimage="url(images/background/3.png) top">
        <div class="container">
                <div class="row">
                    
                    <div class="col-lg-8 offset-md-2 mb-sm-30">
                    <h3><?php echo $lang['suggestion'] ?></h3>
                    
                    <form name="contactForm" id="contact_form" class="form-border" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."#message"); ?>">
                        <div class="field-set">
                            <input type="text" name="name" id="name" class="form-control" placeholder="<?php echo $lang['contact_name']?>" />
                        </div>

                        <div class="field-set">
                            <input type="text" name="email" id="email" class="form-control" placeholder="<?php echo $lang['contact_email'] ?>" />
                        </div>

                        <div class="field-set">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="<?php echo $lang['contact_subject'] ?>" />
                        </div>

                        <div class="field-set">
                            <textarea name="message" id="message" class="form-control" placeholder="<?php echo $lang['contact_message'] ?>"></textarea>
                        </div>
                        <?php echo $message ?>
                        
                        <div class="spacer-half"></div>

                        <div id="submit">
                            <input type="submit" value="<?php echo $lang['contact_submit'] ?>" class="btn btn-custom" />
                        </div>
                    </form>
                </div>
                
                <div class="spacer-double"></div>
                
                <div class="col-lg-8 offset-md-2 mb30">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="padding40 bg-color-2 text-light box-rounded">
                                <?php echo $lang['contact_buta'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>

    </section>

</div>
<!-- content close -->

<?php include_once "footer.php" ?>