<?php
error_reporting(E_ALL);

if(!isset($_GET['music'])) { header('Location: http://bebulo.com/index.php'); }

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


include("config.php");
// connect to the mysql server
$link = mysql_connect($server, $db_user, $db_pass)
or die ("<br><br><br><br><br><br><br><br>MYSQL 연결 실패 ".mysql_error());
mysql_query("set names utf8");
// select the database
mysql_select_db($database)
or die ("<br><br><br><br><br><br><br><br>DB 연결 실패 ".mysql_error());
// check if the username is taken
$check = "select * from music WHERE id = '".$_GET['music']."'";
$qry = mysql_query($check) or die ("<br><br><br><br><br><br><br><br>SELECT 실패 ".mysql_error());
$num_rows = mysql_num_rows($qry);

$num = "";
$singer = "";
$title = "";
$pic = "";
$date = "";
$album = "";
$url = "";
$lyric = "";

$valid = false;
if ($num_rows == 1) {
	$valid = true;
	while($row=mysql_fetch_array($qry)){
		$num = $row['id'];
		$singer = $row['singer'];
		$title = $row['title'];
		$pic = $row['picture'];
		$date = $row['upload_date'];
		$album = $row['album'];
		$url = $row['url'];
		$lyric = $row['lyric'];
	}
}

if(isset($_POST['download'])) {

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
	<link rel="stylesheet" type="text/css" href="/style.css?ver=7.1">
	<link rel="stylesheet" type="text/css" href="/animate.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">

	<title><?php echo $singer." - ".$title; ?> > 배불로 > 무료 음악 다운로드</title>

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

<div class="se-pre-con"></div>
<form method="POST">


<div id="Navbar" class="animated fadeInDown" align="center">
<table><tr>
<td id="nav_title"><a href="/">배불로</a></td>
<td id="nav_search"><input type="submit" class="submit search" name="search1" value=""><input type="search" class="searchbox" name="searchbox1" value="<?php if ($keyword != "") { echo $keyword; } ?>" placeholder="검색"></td>
<td id="nav_request"><a href="/request.php"><button type="button" class="submit request">요청</button></a></td>
</tr></table>
</div>




<div id="page" align="center"><div id="page_in" align="center">

<div class="div_download">
	<div id="music_album"><img id="down_pic" alt="" src="/music/<?php echo $pic; ?>"></div>
	<div id="music_info">
        <p id="down_title"><?php echo $title; ?></p>
        <p id="down_singer"><?php echo $singer; ?></p>
        <p id="down_album"><?php echo $album; ?></p>
	</div>
	<div class="div_button">
		<a href="#" id="toggle"><button class="submit" type="button"><i class="fa fa-file-text" aria-hidden="true"></i></button></a>
	</div>
	<div class="div_button">
		<a href="<?php if($valid) { echo $url; } ?>" target="_blank"><button type='button' class='submit' name='download'><i class="fa fa-download" aria-hidden="true"></i></button></a>
	</div>
	<div id="down_lyric"><pre><?php echo $lyric; ?></pre></div>

	<div class="back"><a href="/">돌아가기</a></div>
</div>



</div></div>


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
<script type="text/javascript" src="jquery.word-break-keep-all.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(this).scrollTop(0);
});

$(document).ready(function(){
  // run
  $('#lyric').wordBreakKeepAll();

  // if IE, off this plugin.
  // IE에서는 플러그인을 사용하지 않고 CSS로 처리하고 싶은 경우 이렇게 옵션을 주면 된다.
  //$('.test').wordBreakKeepAll({OffForIE: true});

  // On IE, if you want to apply js type, not CSS, set option like below.
  // IE에서 플러그인을 사용하되 CSS를 적용하는 게 아니라 비 IE 브라우저처럼 적용하고 싶을 때 이렇게 옵션을 준다.
  //$('#p_request_done').wordBreakKeepAll({useCSSonIE: false});
});

function close_window() {
	close();
}

$(function()
  {
     $("a#toggle").click(function() {
        $("#down_lyric").slideToggle();
        return false;
     });
  });

</script>



</body>
</html>
