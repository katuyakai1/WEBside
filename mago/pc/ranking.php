<!DOCTYPE meta PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />

<script src="../js/jquery-2.1.4.min.js"></script>



<link rel="stylesheet" type="text/css" href="./css/ranking.css" />
<link rel="stylesheet" type="text/css" href="./css/lightbox.css" />

<div id="head">
	<div id="logo">
		<a> <img src="../images/yozora.png">
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
		<h1>みんなのランキング(*ﾟ∀ﾟ*)/(仮)</h1>

		<a href="http://localhost/GP41/mago/pc/index.php">ギャラリーを見る( *^艸^)</a>
	</div>
	<div id="mainBox">



	<?php
	if (file_get_contents ( '../ranking.txt', true )) {
		$file = file ( '../ranking.txt' );

		foreach ( $file as $line ) {
			$dat = explode ( ',', rtrim ( $line ) );
			$data [] = array (
					'first' => $dat [0],
					'second' => $dat [1]
			);
		}

		foreach ( $data as $key => $high ) {
			$first [$key] = $high ['first'];
			$second [$key] = $high ['second'];
		}

		array_multisort ( $second, SORT_DESC, $data );
		print "<table width='50%'>";

		$i = 1;
		foreach ( $data as $dat ) {
			$line = implode ( ",", $dat );
			$ten = strpos ( $line, "," );
			$substr1 = substr ( $line, 0, $ten );
			$substr2 = substr ( $line, $ten + 1 );

			echo "<tr><td width=30%>" . $i . "位</td>";
			echo "<td width=35%>" . $substr1 . "</td>";
			echo "<td width=35%>" . $substr2 . "pt!</td></tr>";
			$i ++;
		}

		print "</table>";
	}
	?>


	</div>

	<script src="../js/lightbox.min.js"></script>
</body>
</html>