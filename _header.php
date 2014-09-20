<!DOCTYPE html>
<html>
<head>
    <title><?php echo $PAGE_TITLE; ?></title>
    <meta name="description" content="We are a dedicated and highly trained team devoted to empowering our friends and neighbors to receive exceptional dental care using advanced technology in a warm and caring atmosphere.">
    <meta name="keywords" content="Dental, Dentist, Whitefish, Implants, Whitening, Montana" />
    <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />
    <script src="/js/jquery-2.1.1.min.js"></script>
    <!--<script src="http://use.edgefonts.net/source-sans-pro:n2,i2,n3,i3,n4,i4,n6,i6,n7,i7,n9,i9.js"></script>-->
    <link rel="stylesheet" href="/css/reset.css"/>
    <link rel="stylesheet" href="/css/fonts/source-sans-pro.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <script type="text/javascript">$(function(){
        $('#menu_btn').click(function(event){
            event.preventDefault();
            $(this).toggleClass('active');
            if($(this).hasClass('active')){
                $('body > header nav').addClass('active');
            } else {
                $('body > header nav').removeClass('active');
            }
        });
    });</script>
</head>
<body class="home">
    <header>
        <div class="inner-wrapper">
            <a href="/"><h1>Alpenglow Dental</h1></a>
            <a href="#" id="menu_btn">Menu</a>
            <nav>
                <a <?php if($PAGE == 'mission'){ echo 'class="active"'; } ?> href="/">Our Mission</a>
                <a <?php if($PAGE == 'services'){ echo 'class="active"'; } ?> href="/services/">Our Services</a>
                <a <?php if($PAGE == 'promotions'){ echo 'class="active"'; } ?> href="/promotions/">Promotions</a>
                <a <?php if($PAGE == 'contact'){ echo 'class="active"'; } ?> href="/contact/">Contact Us</a>
            </nav>
        </div>
    </header>