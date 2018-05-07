<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hello World</title>

	<style type="text/css">

	</style>
</head>
<body>
<?php foreach ($images as $image): ?>
	<li><?=anchor('helloworld/show/' . $image)?></li>
<?php endforeach; ?>
</body>
</html>
