<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">

<head>
<!-- fontawesome link -->
	<script src="https://kit.fontawesome.com/e6bbfbc7ad.js" crossorigin="anonymous"></script>
	
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?> | Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
	<meta name="keywords" content="<?php getkeywords("titles");?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="css/style2.css.css">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
</head>

<body>
	<!--Header-->
	<?php include("header.php");?>
	<!--//header-->
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Contact</li>
	</ol>
	<!--//banner-->
	<!--/main-->
	        <!-- www.123formbuilder.com script begins here --><script type="text/javascript" defer src="//www.123formbuilder.com/embed/5420774.js" data-role="form" data-default-width="650px"></script><!-- www.123formbuilder.com script ends here -->
			<!--//main-->
			<!--footer-->
			
			<!---->
			<!-- js -->
			<script src="js/jquery-2.2.3.min.js"></script>
			<!-- //js -->
			<!--/ start-smoth-scrolling -->
			<script src="js/move-top.js"></script>
			<script src="js/easing.js"></script>
			<script>
				jQuery(document).ready(function ($) {
					$(".scroll").click(function (event) {
						event.preventDefault();
						$('html,body').animate({
							scrollTop: $(this.hash).offset().top
						}, 900);
					});
				});
			</script>
			<!--// end-smoth-scrolling -->

			<script>
				$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
							 		*/

							 		$().UItoTop({
							 			easingType: 'easeOutQuart'
							 		});

							 	});
							 </script>
							 <a href="#home" class="scroll" id="toTop" style="display: block;">
							 	<span id="toTopHover" style="opacity: 1;"> </span>
							 </a>

							 <!-- //Custom-JavaScript-File-Links -->
							 <script src="js/bootstrap.js"></script>


							</body>

							</html>