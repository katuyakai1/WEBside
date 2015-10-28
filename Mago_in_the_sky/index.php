<!DOCTYPE meta PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />

<script src="./js/jquery-2.1.4.min.js"></script>



<link rel="stylesheet" type="text/css" href="./css/index.css" />
<link rel="stylesheet" type="text/css" href="./css/lightbox.css" />

<div id="head">
	<div id="logo">
		<a> <img src="./img/yozora.png">
		</a>
	</div>
	<div id="title">
		<h1>孫 in the sky! どこにも現れる孫に元気を貰おう！</h1>
		<h2>
			いつまでも元気な体と発想を。体を使って孫と一緒に空に絵を描くことでエクササイズ！<br>新感覚ア―トで心と体を鍛えよう！<br /> <br />H440
		</h2>
	</div>
</div>
<title>孫 in the sky!</title>

</head>

<body>

	<div id="topBox">
		<h1>みんなのギャラリー(*ﾟ∀ﾟ*)/(仮)</h1>
	</div>
	<div id="mainBox">

		<?php
		$i = 0;
		$count = 0;
		$imagedir = opendir ( "./photo" );
		print "<table width='100%'>";

		while ( false !== ($file [] = readdir ( $imagedir )) );
		closedir ( $imagedir );

		natsort ( $file );
		reset ( $file );

		while ( false !== ($jpg = each ( $file )) ) {
			if ($count <= 2) {
				$count = $count + 1;
			} else {
				if ($i == 0) {
					if (preg_match ( "|.jpg$|", $jpg [1] )) {
						print "<tr><td><a href='./photo/" . $jpg[1] . "' data-lightbox='name' data-title='$jpg[1]' ><img src='./photo/" . $jpg [1] . "' style='float:left;margin-right:4px;margin-bottom:4px;width:100%;'></a></td>";
					}
					$i = $i + 1;
				} elseif ($i == 4) {
					if (preg_match ( "|.jpg$|", $jpg [1] )) {
						print "<td><a href='./photo/" . $jpg[1] . "' data-lightbox='name' data-title='$jpg[1]'><img src='./photo/" . $jpg [1] . "' style='float:left;margin-right:4px;margin-bottom:4px;width:100%;'></td></a></tr>";
					}
					$i = 0;
				} else {
					if (preg_match ( "|.jpg$|", $jpg [1] )) {
						print "<td><a href='./photo/" . $jpg[1] . "' data-lightbox='name' data-title='$jpg[1]'><img src='./photo/" . $jpg [1] . "' style='float:left;margin-right:4px;margin-bottom:4px;width:100%;'></a></td>";
					}
					$i = $i + 1;
				}
			}
		}

		print "</table>";
		?>

	</div>

	<script src="./js/lightbox.min.js"></script>
</body>
</html>