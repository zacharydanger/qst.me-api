<?php
/******************************************************************
 * WARNING: This isn't secure. Don't use it. This is strictly for *
 * sample purposes only.					  *
 ******************************************************************/
require_once 'qstme.php';
$url = trim($_GET['url']);
if(false == empty($url)) {
	$result = Qstme::getUrl($url);
	$error = Qstme::$error;
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Qst.me API Example</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
	<h1>Qst.me API Example</h1>
	<form id="qstme" action="" method="get">
		<fieldset>
			<legend>url</legend>
			<input type="text" name="url" value="<?php echo htmlentities($url); ?>" />
			<input type="submit" value="Qst.me!" />
		</fieldset>
	</form>
	<?php
	if(true == isset($result)) {
	?>
	<hr />
	<strong>Results:</strong>
		<?php
		if(true == $error) {
		?>
		Error: <?php echo $result; ?>
		<?php
		} else {
		?>
		<a href="<?php echo $result; ?>"><?php echo $result; ?></a>
		<?php
		}
	}
	?>
</body>
</html>
