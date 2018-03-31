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
<form name="language" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<select onchange = "document.language.submit()" name="lang">
    	<option selected="selected"><?php echo $lang['select-language']; ?></option>
        <option value="en"><?php echo $lang['en']; ?></option>
        <option value="es"><?php echo $lang['es']; ?></option>
        <option value="fr"><?php echo $lang['fr']; ?></option>
     </select>
</form>
<h1>
<?php
	echo $lang['hello']."<br />";
	echo $lang['page']."<br />";
?>
</h1>
<a href="page2.php"><?php echo $lang['next']; ?></a>
</div>
</body>
</html>