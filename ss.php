<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>msmaksite.ru - Соц.Сети</title>

<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
<link rel="stylesheet" type="text/css">
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
<link rel="manifest" href="favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" href="index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
</head>
<body>
<?php include ('prefabs/header.php'); ?><br>
<h1>Ссылки:</h1>
<br>
<a href="https://www.youtube.com/channel/UCnScUkMuci6Ky2JnyUhF7ng" class="yt">YouTube</a>
<a href="https://www.vk.com/msmakoffical" class="yt">VK</a>
<a href="https://msmakoffical.newgrounds.com/" class="yt">NewGrounds</a>
<a href="https://soundcloud.com/ms-mak-offical" class="yt">SoundCloud</a>

<!-- Стиль -->
<style>
.navbar {
width: 100%;
height: 90px;
box-shadow: 0 4px 10px rgba(0, 0, 0, .1);
font-family: 'Source Code Pro', monospace;
}

.navbar .container {
height: inherit;  
display: flex;
justify-content: space-between;
align-items: center;
}
.navbar-menu {
list-style-type: none;
padding-left: 0;
margin-bottom: 0;
}
.navbar-menu li {
display: inline-block;
}
.navbar-menu li a {
display: inline-block;
color: #000;
opacity: 0.7;
text-decoration: none;
padding: 10px;
transition: all .11s ease-in-out;
}
h1, h2, h3, h4, h5, h6{
	padding: 30px;
}
.navbar-menu li a:hover {
opacity: 1;
}
.navbar-wrap {
display: flex;
flex-flow: row nowrap;
}
.yt {
margin-left: 30px;
padding: 10px 30px;
opacity: 7;
background-color: #75bbfd;
border-radius: 80px;
color: #000;
font-family: 'Source Code Pro', monospace;
text-decoration: none;
box-shadow: 0 4px 6px rgba(133, 77, 162, .2);
transition: all .1s ease-in-out;
}
.yt:hover {
transform : scale(1.04);
color: #fff;
box-shadow: 0 9px 9px rgba(133, 77, 162, .5);
}
.navbar-brand {
font-weight: 700;
font-size: 26px;
text-decoration: none;
color: #000;
padding: 10px;
opacity: 7;
transition: all .11s ease-out;
}
.navbar-brand:hover {
color: darkblue;
color: #526154;
}
h1, h5 {
font-family: 'Source Code Pro', monospace;
}
</style>
<?php include ('prefabs/footer.php'); ?>
</body>
</html>