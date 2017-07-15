<?php
error_reporting(E_ALL);
$keyword = "";
if(isset($_POST['search1'])) {
	$keyword = $_POST['searchbox1'];
	if($keyword!="") {
		header('Location: http://bebulo.com/index.php?search='.$keyword);
		die("<br><br><br><br>Search Failed.");
	}
	else {
		echo "<script>alert('검색어를 입력해주세요.')</script>";
	}
}
if(isset($_POST['search2'])) {
	$keyword = $_POST['searchbox2'];
	if($keyword!="") {
		header('Location: http://www.bebulo.com/index.php?search='.$keyword);
		die("<br><br><br><br>Search Failed.");
	}
	else {
		echo "<script>alert('검색어를 입력해주세요.')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="배불로" />
	<link rel="shortcut icon" href="/img/b.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="/img/b.png"/>
	<link rel="apple-touch-icon" sizes="114x114" href="/img/b-114.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="/img/b-114.png" />
	<link rel="stylesheet" type="text/css" href="/style.css?ver=5.8">
	<link rel="stylesheet" type="text/css" href="/animate.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">

	<title>배불로 > 무료 음악 다운로드</title>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90860253-1', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body>

<form method="POST">

<div id="Navbar" class="animated fadeInDown" align="center">
<table><tr>
<td id="nav_title"><a href="/">배불로</a></td>
<td id="nav_search"><input type="submit" class="submit search" name="search1" value=""><input type="search" class="searchbox" name="searchbox1" value="<?php if ($keyword != "") { echo $keyword; } ?>" placeholder="검색"></td>
<td id="nav_request"><a href="/request.php"><button type="button" class="submit request">요청</button></a></td>
</tr></table>
</div>


<div id="page" align="center"><div id="page_in" align="center">



</div></div>

<!--
<div id="div_insta">
<a href="https://www.instagram.com/bebulocom/?ref=badge" target="_blank"><img id="insta" src="/img/instagram.png" alt="Instagram" /></a>
</div>
-->

</form>




<footer>
<div class="div_footer" align="center">
<span id='info'>문의: help@bebulo.com</span>
<span>© 2017 ALL RIGHTS RESERVED.</span>
</div>
<div class="m m_footer" align="center">
<p id='info'>문의: help@bebulo.com</p>
<p>© 2017 ALL RIGHTS RESERVED.</p>
</div>
</footer>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="/js/jquery.js"> </script>
<script src="/js/javascript.js?version=12"> </script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script>

$(document).ready(function() {

	$('#page').scrollPagination({

		nop     : 24, // The number of posts per scroll to be loaded
		offset  : 0, // Initial offset, begins at 0 in this case
		error   : '', // When the user reaches the end this is the message that is
		                            // displayed. You can change this if you want.
		delay   : 0, // When you scroll down the posts will load after a delayed amount of time.
		               // This is mainly for usability concerns. You can alter this as you see fit
		scroll  : true // The main bit, if set to false posts will not load as the user scrolls.
		               // but will still load if the user clicks.

	});

});

</script>

</body>
</html>
