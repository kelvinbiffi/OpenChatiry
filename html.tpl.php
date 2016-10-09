<?php

$base_path = "/open-charity";

$sitePath = $base_path
. "/" .
$directory
?>

<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<?php print $head; ?>
<title>Open Charity</title>
<?php print $styles; ?>
<link rel="stylesheet" href="<?php print $sitePath ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php print $sitePath ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php print $sitePath ?>/css/style.css">
<script src="<?php print $sitePath ?>/js/jquery.min.js"></script>
<script src="<?php print $sitePath ?>/js/bootstrap.min.js"></script>
<?php print $scripts; ?>
<link rel="apple-touch-icon" sizes="57x57" href="<?php print $sitePath ?>/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php print $sitePath ?>/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php print $sitePath ?>/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php print $sitePath ?>/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php print $sitePath ?>/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php print $sitePath ?>/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php print $sitePath ?>/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php print $sitePath ?>/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php print $sitePath ?>/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php print $sitePath ?>/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php print $sitePath ?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php print $sitePath ?>/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php print $sitePath ?>/favicon-16x16.png">
<link rel="manifest" href="<?php print $sitePath ?>/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
