<?php
	session_start();
	require_once("index.conf");
	$language = new Language();
	$lang = $language->getLanguage(@$_POST['lang']);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo $lang['title'];  ?></title>
</head>

<body>
<div align="center">
<h1>
<?php
	echo $lang['hello']."<br />";
	echo $lang['page2']."<br />";
?>
</h1>
<a href="index.php"><?php echo $lang['home']; ?></a>
</div>
</body>
</html>