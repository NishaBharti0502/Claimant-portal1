<?php
$_SESSION['username']="$usernam";
$x="THANKS TO SIGNIN " . $_SESSION['username']. " ";
session_destroy();
?>
<html><head><title>thank</title><style>
.thanks {
color:navy;
font-size:60px;
font-family:cursive;
text-shadow:2px 2px 2px;
}
center{
font-size:50px;
color:white;
text-shadow:2px 2px 2px black;
Font-weight:bold; }
body {
background: url(https://hdwallsource.com/img/2016/6/palm-tree-art-desktop-wallpaper-49771-51450-hd-wallpapers.jpg) no-repeat ;
background-size:cover;
}
</style>
</head>
<body>
<p class="thanks">
<?php
echo $x?>
</p><center>WELCOME TO UTKARSH WEB APP</center>
</body>
</html>