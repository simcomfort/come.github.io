


<!DOCTYPE html>
<html>
<head>
	<!-- fontawesome link -->
	<script src="https://kit.fontawesome.com/e6bbfbc7ad.js" crossorigin="anonymous"></script>
<style>
html, body {
	height: 100%;
}

.page-wrapper {
	min-height: 100%;
}
.btn {
	
	background-color: rgba(0,0,255,0.8);
	color: white;
	border: 1px solid transparent;
	border-radius: .25rem;
	cursor: pointer;
	float: right;
	padding-left: 5px;
	padding-right: 5px;
	margin-right: 60px;
	transition: all 3s;
}

.btn:hover {
	color: white;
	background-color: rgba(0,205,185,5);
	transition: all 0.7s;
    
}

.clearfix::after {
    content: '';
    display: block;
    clear: both;
}
.footer {
	background: #444;
	color: black;
	height: 300px;
	position: relative;
}

.footer .footer-content .footer-section {
	flex: 1;
}


.footer .footer-content {
	padding-top: 20px;
	height: 250px;
	display: flex;
}

.footer .footer-content h2 {
	color: white;
	font-family: "Time New Roman"
}

.footer .footer-content .about h2 {
	color: white;
	font-family: 'Kaushan Script', cursive;
	margin-left: 20px;
}


.footer .footer-content .about h2 span {
	color: red !important;
	font-family: 'Kaushan Script', cursive;
	
}

.footer .footer-content .about p {
	color: white;
	margin-left: 20px;
	margin-right: 25px;

}

.footer .footer-content .about .socials a {
	border: 1px solid white;
	width: 40px;
	height: 30px;
	padding-top: 5px;
	margin-right: 5px;
	text-align: center;
	display: inline-block;
	font-size: 1.3em;
	border-radius: 5px;
	margin-top: 15px;
	background-color: white;
	margin-left: 18px;
	transition: all 1s;
	
}





.footer .footer-content .contact-form .contact-input {
	margin-bottom: 0px;
	width: 300px;
	line-height: 1.5rem;
	padding: .9rem 1.4rem;
	border: none;
	margin-right: 40px;
	/*text-align: center;*/
	font-family: "Time New Roman";
	margin-top: 2px;

}

.footer .footer-content .contact-form .contact-input h2 {
	margin-top: 0px;
}

.footer .footer-content .contact-form .contact-input:focus {
	

}


    .footer .footer-bottom {
	background: #444;
	color: white;
	width: 100%;
	margin-top: 20px;
	text-align: center;
	position: absolute;
	bottom: 0px;
	left: 0px;
	padding-top: 20px;
	box-shadow: 1rem  1rem  1rem -1rem rgba(0,205,185,1);
}

</style>
</head>
<body>

	<div class="page-wrapper">

	</div>
<?php include("footer.php");?>
 
</body>
</html>
