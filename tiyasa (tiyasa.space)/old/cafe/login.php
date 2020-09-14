<?php
    $mac=$_POST['mac'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $linklogin=$_POST['link-login'];
    $linkorig=$_POST['link-orig'];
    $error=$_POST['error'];
    $trial=$_POST['trial'];
    $loginby=$_POST['login-by'];
    $chapid=$_POST['chap-id'];
    $chapchallenge=$_POST['chap-challenge'];
    $linkloginonly=$_POST['link-login-only'];
    $linkorigesc=$_POST['link-orig-esc'];
    $macesc=$_POST['mac-esc'];
    $identity=$_POST['identity'];
    $bytesinnice=$_POST['bytes-in-nice'];
    $bytesoutnice=$_POST['bytes-out-nice'];
    $sessiontimeleft=$_POST['session-time-left'];
    $uptime=$_POST['uptime'];
    $refreshtimeout=$_POST['refresh-timeout'];   
    $linkstatus=$_POST['link-status'];  
    $advertpending=$_POST['advert-pending'];
    $linkadvert=$_POST['link-advert'];
    $linklogout=$_POST['link-logout'];
    $blocked=$_POST['blocked'];
    $popup=$_POST['pop-up'];
?>
<!DOCTYPE HTML>
<!--
	Parallelism by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>TIYASA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
        <?php if($chapid) : ?>
            <form name="sendin" action="<?php echo $linkloginonly; ?>" method="post">
                <input type="hidden" name="username" />
                <input type="hidden" name="password" />
                <input type="hidden" name="dst" value="<?php echo $linkorig; ?>" />
                <input type="hidden" name="popup" value="true" />
            </form>
            <script type="text/javascript" src="js/md5.js"></script>
            <script type="text/javascript">
                function doLogin() {
                document.sendin.username.value = document.login.username.value;
                document.sendin.password.value = md5('<?php echo $chapid; ?>' + document.login.password.value + '<?php echo $chapchallenge; ?>');
                document.sendin.submit();
                return false;
                }
            </script>
        <?php endif; ?>
<!-- $(endif) -->
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">

						<!-- Items -->
							<div class="items">

								<div class="item intro span-2">
									<h1>TIYASA SPACE</h1>
									<p>COWORKING SPACE </br>COLLABORATION<br />
									BOUTIQUE</p>
								</div>

								<article class="item thumb span-1">
									<h2>Join US</h2>
									<a href="images/fulls/01.jpg" class="image"><img src="images/thumbs/01.jpg" alt=""></a>
								</article>

								<article class="item thumb span-2">
									<h2>Member Get Member</h2>
									<a href="images/fulls/02.jpg" class="image"><img src="images/thumbs/02.jpg" alt=""></a>
								</article>

								<article class="item thumb span-2">
									<h2>More Interestng</h2>
									<a href="images/fulls/03.jpg" class="image"><img src="images/thumbs/03.jpg" alt=""></a>
								</article>

								<article class="item thumb span-2">
									<h2>Our Value</h2>
									<a href="images/fulls/04.jpg" class="image"><img src="images/thumbs/04.jpg" alt=""></a>
								</article>
<!--
								<article class="item thumb span-2">
									<h2>Strategis to Build Collaboration</h2>
									<a href="images/fulls/05.jpg" class="image"><img src="images/thumbs/05.jpg" alt=""></a>
								</article>

								<article class="item thumb span-2">
									<h2>People Development</h2>
									<a href="images/fulls/06.jpg" class="image"><img src="images/thumbs/06.jpg" alt=""></a>
								</article>
-->
							</div>
							<div class="items">
				
									<img src="images/thumbs/Menu_Tiyasa.jpg"  style="width:100%; alt=""> 
								

						<!-- Items  -->


						<!--		<article class="item thumb span-3"><h2>&nbsp</h2><a href="images/fulls/menu_01.jpg" class="image"><img src="images/thumbs/menu_01.jpg" alt=""></a></article>
								<article class="item thumb span-1"><h2>&nbsp</h2><a href="images/fulls/Menu_Tiyasa-01.jpg" class="image"><img src="images/thumbs/Menu_Tiyasa-01.jpg" alt=""></a></article>
						-->		<article class="item thumb span-2"><h2>&nbsp</h2><a href="images/fulls/Menu_Tiyasa-02.jpg" class="image"><img src="images/thumbs/Menu_Tiyasa-02.jpg" alt=""></a></article>
								<article class="item thumb span-2"><h2>&nbsp</h2><a href="images/fulls/Menu_Tiyasa-03.jpg" class="image"><img src="images/thumbs/Menu_Tiyasa-03.jpg" alt=""></a></article>
								<article class="item thumb span-2"><h2>&nbsp</h2><a href="images/fulls/Menu_Tiyasa-04.jpg" class="image"><img src="images/thumbs/Menu_Tiyasa-04.jpg" alt=""></a></article>
								<article class="item thumb span-2"><h2>&nbsp</h2><a href="images/fulls/Menu_Tiyasa-05.jpg" class="image"><img src="images/thumbs/Menu_Tiyasa-05.jpg" alt=""></a></article>

							</div>
								<div class="item intro span-3">
				<form  name="login" action="<?php echo $linkloginonly; ?>" method="post" <?php if($chapid) : ?>onSubmit="return doLogin()" <?php endif; ?> >
				<input type="hidden" name="dst" value="<?php echo $linkorig; ?>" />
				<input type="hidden" name="popup" value="true" />
				<div >
						<input type="text"  name="username"  placeholder="Username/Email" value="<?php echo $username; ?>">
						<input type="password" name="password"  placeholder="Password">
					</div>
					<input type="submit" value="Login">
				</form>								</div>
					</section>

				<!-- Footer -->
					<section id="footer">
						<section>
							<p>This is <strong>TIYASA SPACE</strong>, a Coworking Space, Collaboration and Boutique.</br>Tamanan, Banguntapan, Bantul, Daerah Istimewa Yogyakarta 
							</p>
						</section>
						<section>
							<ul class="icons">
								<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.instagram.com/tiyasa.space/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
								<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
							</ul>
							<ul class="copyright">
								<li><a href="http://html5up.net">TIYASA 2020</a></li>
							</ul>
						</section>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
