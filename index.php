<DOCTYPE html>
    <?php
    if (isset($_GET['page'])) {
	    $page = $_GET['page'];
    } else {
	    $page = 'home';
    }
    ?>
<style>
    .footer {
        position: relative;
        width: 100%;
        height: 349px;
        left: 0px;
        background-color: #010555;
        top: 0px;
    }

    <?php
	if ($page == 'Aditya') {
		echo 'section#Aditya {
			display: block;
		}';
		$menu_status = 'Aditya';
        'class.footer {top: 3072px;}';
	} else if ($page == 'Brian') {
		echo 'section#Brian {
			display: block;
		}';
		$menu_status = 'Brian';
    } else if ($page == 'Irving') {
		echo 'section#Irving {
			display: block;
		}';
		$menu_status = 'Irving';
    } else if ($page == 'ContactUs') {
		echo 'section#ContactUs {
			display: block;
		}';
		$menu_status = 'ContactUs';
    } else {
		echo 'section#home {
			display: block;
		}';
		$menu_status = 'home';
	}
    ?>
</style>
    <head>
        <title>Gyudon</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">   
        <style>
            .popme {
                position: fixed;
                width: 960px;
                height: 621px;
                top: calc(50% - 310.5px);
                left: calc(50% - 480px);
                background-color: #010555;
                z-index: 4;
                display: none;
            }
        </style>
    </head>
    <body>
        <div gen-cont class="general">
            <div class="nav">
                <div class="logo" style="background-image: url('assets/logo-1.png'); background-size: cover; background-repeat: no-repeat;"></div>
                <div class="nav-menu">
                    <div class="nav-menu-txt <?php if ($menu_status == 'home') { echo 'active'; } ?>" onclick="location.href='?page=home'">Home</div>
                    <div class="nav-menu-txt <?php if ($menu_status == 'Aditya') { echo 'active'; } ?>" onclick="location.href='?page=Aditya'">Aditya</div>
                    <div class="nav-menu-txt <?php if ($menu_status == 'Brian') { echo 'active'; } ?>" onclick="location.href='?page=Brian'">Brian</div>
                    <div class="nav-menu-txt <?php if ($menu_status == 'Irving') { echo 'active'; } ?>" onclick="location.href='?page=Irving'">Irving</div>
                    <div class="nav-menu-txt <?php if ($menu_status == 'ContactUs') { echo 'active'; } ?>" onclick="location.href='?page=ContactUs'">Contact Us</div>
                </div>
            </div>
        </div>
        <section id="home">
            <div class="main-menu">
                <div class="a-card">
                    <div class="artist-card">
                        <img class="artist-img-inside" src="assets/foam.jpg">
                        <div class="info-txt">
                            <div class="info-txt-title">Irving Tandra</div>
                            <div class="info-txt-body">Tank Driver</div>
                            <div class="info-txt-body2">Work hard and be brave</div>
                        </div>
                    </div>
                </div>
                <div class="a-card">
                    <div class="artist-card">
                        <img class="artist-img-inside" src="assets/Nevermind.jpeg">
                        <div class="info-txt">
                            <div class="info-txt-title">Agilelo</div>
                            <div class="info-txt-body">Motion Graphic Designer</div>
                            <div class="info-txt-body2">With money we're happy</div>
                        </div>
                    </div>
                </div>
                <div class="a-card">
                    <div class="artist-card">
                        <img class="artist-img-inside" src="assets/brian 1.jpg">
                        <div class="info-txt">
                            <div class="info-txt-title">Brian Christiansen</div>
                            <div class="info-txt-body">Professional Killer</div>
                            <div class="info-txt-body2">Murphy's law: anything that can go wrong will go wrong</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="Aditya">
                <div class="main-menu2">
                <div class="header" style="background-image: url('assets/Nevermind.jpeg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="header-overlay"></div>
                    <div class="profile" style="background-image: url('assets/profile.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="name">Agilelo</div>
                    <div class="header-info-txt">Motion Graphic Designer</div>
                    <div class="header-info-txt2">With money we're happy</div>
                </div>
                <div class="bio-title">Artist Biodata</div>
                <div class="bio-cont">
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon hospital.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Born</div>
                        <div class="icon-txt">2002-06-25</div>
                    </div>
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon birthplace.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Birth Place</div>
                        <div class="icon-txt">Bandung</div>
                    </div>
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon height.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Height</div>
                        <div class="icon-txt">175 cm / 5ft 9in</div>
                    </div>
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon blood type.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Blood Type</div>
                        <div class="icon-txt">B</div>
                    </div>
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon achievement.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Achievement</div>
                        <div class="icon-txt">West Java Short Movie Winner</div>
                    </div>
                </div>
                <div class="portfolio-title">Portfolio Showcase</div>
                <div class="portfolio-cont">
                    <div class="img">
                        <img class="img-port" src="assets/2 Sided Fear.jpeg">
                        <div class="img-title">2 Sided Fear</div>
                        <div class="img-txt">2022-08-08</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div class="img">
                        <img class="img-port" src="assets/Nevermind.jpeg">
                        <div class="img-title">Nevermind</div>
                        <div class="img-txt">2022-08-08</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div class="img">
                        <img class="img-port" src="assets/Rectangle 3.png">
                        <div class="img-title">Inner demon</div>
                        <div class="img-txt">2022-08-08</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div class="img">
                        <img class="img-port" src="assets/Three Formats.jpeg">
                        <div class="img-title">Three Formats</div>
                        <div class="img-txt">2022-08-08</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div class="img">
                        <img class="img-port" src="assets/Old modern.jpeg">
                        <div class="img-title">Old modern</div>
                        <div class="img-txt">2022-08-08</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div id="pop" class="popme">
                        <div class="popup-img">
                            <img class="popup-img-inside" src="assets/Old modern.jpeg" alt="">
                            <div class="popup-img-title">Old modern</div>
                            <div class="popup-img-date">2022-08-08</div>
                            <div class="popup-img-copyright">VISUARD+ © 2022, All Rights Reserved</div>
                        </div>
                        <div class="popup-txt">The same time but capture in the past time</div>
                        <div class="popup-btn" onclick="document.getElementById('pop').style.display= 'none'">
                        <div class="popup-btn-txt">Back</div>
                        </div>
                    </div> 
                </div>
                <div class="contact-title">Contact Info</div>
                <div class="contact-cont">
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon phone.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Phone Number</div>
                        <div class="icon-txt2">087725062002</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon email.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Email</div>
                        <div class="icon-txt2">trypaanjagi@gmail.com</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon wa.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Whatsapp</div>
                        <div class="icon-txt2">087725062002</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon dc.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Discord</div>
                        <div class="icon-txt2">agilelo#2506</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon ig.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Instagram</div>
                        <div class="icon-txt2">@aditya.t.a</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon fb.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Facebook</div>
                        <div class="icon-txt2">sensor art</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon twitter.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Twitter</div>
                        <div class="icon-txt2">visuard_plus</div>
                    </div>
                </div>
        </div>
        </section>
        <section id="Brian">
                <div class="main-menu2">
                <div class="header" style="background-image: url('assets/brian 1.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="header-overlay"></div>
                    <div class="profile" style="background-image: url('assets/profile-brian.jpg'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="name">Brian Christiansen</div>
                    <div class="header-info-txt">Professional Killer</div>
                    <div class="header-info-txt2">Murphy's law: anything that can go wrong will go wrong</div>
                </div>
                <div class="bio-title">Artist Biodata</div>
                <div class="bio-cont">
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon hospital.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Born</div>
                        <div class="icon-txt">1999-01-01</div>
                    </div>
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon birthplace.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Birth Place</div>
                        <div class="icon-txt">Solo</div>
                    </div>
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon height.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Height</div>
                        <div class="icon-txt">178 cm / 6ft</div>
                    </div>
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon blood type.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Blood Type</div>
                        <div class="icon-txt">B</div>
                    </div>
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon achievement.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Achievement</div>
                        <div class="icon-txt">Being a human</div>
                    </div>
                </div>
                <div class="portfolio-title">Portfolio Showcase</div>
                <div class="portfolio-cont">
                    <div class="img">
                        <img class="img-port" src="assets/brian 1.jpg">
                        <div class="img-title">Skeleton concept</div>
                        <div class="img-txt">2022-08-08</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop2').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div class="img">
                        <img class="img-port" src="assets/brian 2.jpg">
                        <div class="img-title">Scene 4-best moment</div>
                        <div class="img-txt">2022-08-08</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop2').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div class="img">
                        <img class="img-port" src="assets/brian 3.jpg">
                        <div class="img-title">Big city</div>
                        <div class="img-txt">2022-08-08</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop2').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div class="img">
                        <img class="img-port" src="assets/brian 4.jpg">
                        <div class="img-title">Cover-my best work</div>
                        <div class="img-txt">2022-08-08</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop2').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div class="img">
                        <img class="img-port" src="assets/brian 5.jpg">
                        <div class="img-title">Running scene</div>
                        <div class="img-txt">2022-08-08</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop2').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div id="pop2" class="popme">
                        <div class="popup-img">
                            <img class="popup-img-inside" src="assets/brian 5.jpg" alt="">
                            <div class="popup-img-title">Running scene</div>
                            <div class="popup-img-date">2022-08-08</div>
                            <div class="popup-img-copyright">VISUARD+ © 2022, All Rights Reserved</div>
                        </div>
                        <div class="popup-txt">my portfolio consists of some image from my previous project with friends. this one is a concept of skeleton and inner organs of a species from the fictional world we made.</div>
                        <div class="popup-btn">
                            <div class="popup-btn-txt" onclick="document.getElementById('pop2').style.display= 'none'">Back</div>
                    </div>
                </div> 
                </div>
                <div class="contact-title">Contact Info</div>
                <div class="contact-cont">
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon phone.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Phone Number</div>
                        <div class="icon-txt2">08882926992</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon email.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Email</div>
                        <div class="icon-txt2">christiansenbrian99@gmail.com</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon wa.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Whatsapp</div>
                        <div class="icon-txt2">08882926992</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon dc.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Discord</div>
                        <div class="icon-txt2">Brian_tjan#4190</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon ig.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Instagram</div>
                        <div class="icon-txt2">b_tjan</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon fb.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Facebook</div>
                        <div class="icon-txt2">brian tjan</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon twitter.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Twitter</div>
                        <div class="icon-txt2">brian tjan</div>
                    </div>
                </div>
        </div>
        </section>
        <section id="Irving">
                <div class="main-menu2">
                <div class="header" style="background-image: url('assets/foam.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="header-overlay"></div>
                    <div class="profile" style="background-image: url('assets/profile-irving.jpg'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="name">Irving Tandra</div>
                    <div class="header-info-txt">Tank Driver</div>
                    <div class="header-info-txt2">Work hard and be brave</div>
                </div>
                <div class="bio-title">Artist Biodata</div>
                <div class="bio-cont">
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon hospital.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Born</div>
                        <div class="icon-txt">2002-10-31</div>
                    </div>
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon birthplace.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Birth Place</div>
                        <div class="icon-txt">Pontianak</div>
                    </div>
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon height.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Height</div>
                        <div class="icon-txt">180 cm / 6ft 9in</div>
                    </div>
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon blood type.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Blood Type</div>
                        <div class="icon-txt"></div>
                    </div>
                    <div class="icon-pack">
                        <div class="icon-box" style="background-image: url('assets/icon achievement.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title">Achievement</div>
                        <div class="icon-txt">O</div>
                    </div>
                </div>
                <div class="portfolio-title">Portfolio Showcase</div>
                <div class="portfolio-cont">
                    <div class="img">
                        <img class="img-port" src="assets/beach.jpg">
                        <div class="img-title">Chill</div>
                        <div class="img-txt">Bali, July 2022</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop3').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div class="img">
                        <img class="img-port" src="assets/deepinside.jpg">
                        <div class="img-title">extraterrestrial</div>
                        <div class="img-txt">Pontianak, July 2020</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop3').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div class="img">
                        <img class="img-port" src="assets/foam.jpg">
                        <div class="img-title">Abstract</div>
                        <div class="img-txt">Pontianak, August 2020</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop3').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div class="img">
                        <img class="img-port" src="assets/ricefields.jpg">
                        <div class="img-title">Nature</div>
                        <div class="img-txt">Bali, July 2022</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop3').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div class="img">
                        <img class="img-port" src="assets/Sunset.jpg">
                        <div class="img-title">Every sunset brings the promise of a new dawn.</div>
                        <div class="img-txt">Pontianak, february 2018</div>
                        <div class="img-btn">
                            <div class="img-btn-txt" onclick="document.getElementById('pop3').style.display= 'block'">Detail</div>
                        </div>
                    </div>
                    <div id="pop3" class="popme">
                        <div class="popup-img">
                            <img class="popup-img-inside" src="assets/Sunset.jpg" alt="">
                            <div class="popup-img-title">Every sunset brings the promise of a new dawn.</div>
                            <div class="popup-img-date">Pontianak, february 2018</div>
                            <div class="popup-img-copyright">VISUARD+ © 2022, All Rights Reserved</div>
                        </div>
                        <div class="popup-txt"></div>
                        <div class="popup-btn" onclick="document.getElementById('pop3').style.display= 'none'"><div class="popup-btn-txt">Back</div>
                    </div>
                </div>
                </div>
                <div class="contact-title">Contact Info</div>
                <div class="contact-cont">
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon phone.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Phone Number</div>
                        <div class="icon-txt2">08115747001</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon email.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Email</div>
                        <div class="icon-txt2">irvingtans@iclub.com</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon wa.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Whatsapp</div>
                        <div class="icon-txt2">08115747001</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon dc.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Discord</div>
                        <div class="icon-txt2">iping#1386</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon ig.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Instagram</div>
                        <div class="icon-txt2">@irvingtandra</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon fb.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Facebook</div>
                        <div class="icon-txt2">irvingtandra</div>
                    </div>
                    <div class="icon-pack2">
                        <div class="icon-box2" style="background-image: url('assets/icon twitter.png'); background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="icon-title2">Twitter</div>
                        <div class="icon-txt2">irvingtan</div>
                    </div>
                </div>
        </div>
        </section>
        <section id="ContactUs">
            <div class="main-menu3">
                <video autoplay="" muted="" loop="" id="myVideo">
                    <source src="anime gif.mp4" type="video/mp4">
                </video>
                <div class="contactus-title">Contact Us</div>
                <div class="sect1">
                    <div class="sect1-title">Social Media</div>
                    <div class="icon-pack3-cont">
                        <div class="icon-pack3">
                            <div class="icon-box3" style="background-image: url('assets/icon wa-putih.png'); background-size: cover; background-repeat: no-repeat;"></div>
                            <div class="icon-pack3-title">Whatsapp</div>
                            <div class="icon-pack3-txt">+64 811 2434 6469</div>
                        </div>
                        <div class="icon-pack3">
                            <div class="icon-box3"  style="background-image: url('assets/icon ig-putih.png'); background-size: cover; background-repeat: no-repeat;"></div>
                            <div class="icon-pack3-title">Instagram</div>
                            <div class="icon-pack3-txt">Visuard_Plus</div>
                        </div>
                        <div class="icon-pack3">
                            <div class="icon-box3" style="background-image: url('assets/icon dc-putih.png'); background-size: cover; background-repeat: no-repeat;"></div>
                            <div class="icon-pack3-title">Discord</div>
                            <div class="icon-pack3-txt">Visuard_Plus#6412</div>
                        </div>
                        <div class="icon-pack3">
                            <div class="icon-box3" style="background-image: url('assets/icon twitter-putih.png'); background-size: cover; background-repeat: no-repeat;"></div>
                            <div class="icon-pack3-title">Twitter</div>
                            <div class="icon-pack3-txt">Visuard_Plus</div>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="sect2">
                    <div class="sect2-title">Reach Us</div>
                    <div class="sect2-input-cont">
                        <div class="sect2-input">
                            <h1 class="sect2-input-txt">Name</h1>
                        </div>
                        <div class="sect2-input">
                            <h1 class="sect2-input-txt">Email Address</h1>
                        </div>
                        <div class="sect2-input">
                            <h1 class="sect2-input-txt">Requirement</h1>
                        </div>
                    </div>
                    <div class="sect2-btn">
                        <div class="sect2-btn-txt">Sent!</div>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer">
                <div class="ftr-logo" style="background-image: url('assets/logo-1.png'); background-size: cover; background-repeat: no-repeat;"></div>
                <div class="ftr-txt">VISUARD + is a collective group that mostly
                are a digital media designers. Lorem ipsum 
                dolor sit amet, consectetur adipiscing elit. 
                Sed facilisis eget metus quis vestibulum. 
                Suspendisse consectetur nulla ex, in convallis 
                turpis auctor vel. Nulla quis ipsum sed odio.</div>
                <div class="sitemap">
                    <div class="ftr-title">Site Map</div>
                    <div class="ftr-menu">
                        <div class="ftr-menu-txt <?php if ($menu_status == 'home') { echo 'active'; } ?>" onclick="location.href='?page=home'">Home</div>
                        <div class="ftr-menu-txt <?php if ($menu_status == 'Aditya') { echo 'active'; } ?>" onclick="location.href='?page=Aditya'">Aditya</div>
                        <div class="ftr-menu-txt <?php if ($menu_status == 'Brian') { echo 'active'; } ?>" onclick="location.href='?page=Brian'">Brian</div>
                        <div class="ftr-menu-txt <?php if ($menu_status == 'Irving') { echo 'active'; } ?>" onclick="location.href='?page=Irving'">Irving</div>
                        <div class="ftr-menu-txt <?php if ($menu_status == 'ContactUs') { echo 'active'; } ?>" onclick="location.href='?page=ContactUs'">Contact Us</div>
                    </div>
                </div>
                <div class="copyright">VISUARD + © 2022, All Rights Reserved</div>
                <div class="ftr-socmed">
                    <div class="socmed-icon" style="background-image: url('assets/ig.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="socmed-icon" style="background-image: url('assets/twtr.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="socmed-icon" style="background-image: url('assets/wa.png'); background-size: cover; background-repeat: no-repeat;"></div>
                    <div class="socmed-icon" style="background-image: url('assets/dc.png'); background-size: cover; background-repeat: no-repeat;"></div>
                </div>
        </div>
        </div>

        <!--no use, we use the pop up inside the php text (each section)-->
        <!--
        <div class="pop-up">
            <div class="popup-cont">
                <div class="popup-img">
                    <img src="assets/header-brian.jpg" alt="">
                    <div class="popup-img-title">Bromance</div>
                    <div class="popup-img-date">24 April 2022</div>
                    <div class="popup-img-copyright">VISUARD+ © 2022, All Rights Reserved</div>
                </div>
                <div class="popup-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque non rutrum diam. 
                Sed imperdiet sed massa ut elementum. Fusce finibus sit amet orci ac laoreet. Nullam 
                at mauris in lacus viverra fermentum. Fusce lacinia pulvinar urna sit amet fermentum. 
                Aliquam lobortis magna at sapien fermentum ultrices. Fusce neque arcu, cursus porttitor 
                pharetra quis, rutrum sollicitudin velit. Sed eget nisi mi. Quisque urna arcu, elementum</div>
                <div class="popup-btn">
                    <div class="popup-btn-txt">Back</div>
                </div>
            </div>
        </div>
        -->   
    </body>
</html>