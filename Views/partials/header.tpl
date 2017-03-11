<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="xsrf_token" content="<?=$XSRF_TOKEN;?>">
	<link rel="canonical" href="<?=URL;?>" hreflang="es">
	<link rel="shorcut icon" href="<?=FAVICON.'.png';?>">
	<link rel="apple-touch-icon" href="<?=URL.'/touch-icon.png';?>">
	<link rel="search" 
		type="application/opensearchdescription+xml"
		title="<?=SITENAME;?>"
		href="<?=URL.'/opensearch.xml';?>">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:site_name" content="<?=SITENAME;?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?=URL;?>">
	<meta property="og:locale" content="es">
	<meta property="og:title" content="<?=$var['title'];?>">
	<link rel="stylesheet" href="<?=STYLES;?>">
	<script src="<?=SCRIPTS;?>"></script>
	<title><?=$var['title'];?></title>
</head> 
<body>
