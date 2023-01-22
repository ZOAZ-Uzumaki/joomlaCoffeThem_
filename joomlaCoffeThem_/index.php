<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

<head>
<jdoc:include type="head" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/StylForIndex.css" type="text/css" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&family=Russo+One&display=swap" rel="stylesheet">


<link type="image/png" sizes="64x64" rel="icon" href="https://img.icons8.com/pastel-glyph/64/null/warm-drink--v1.png">
<title></title>
</head>

<body>



<!-- <img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/favicon.ico" alt="Custom image" class="customImage" /> -->

  <!--   <jdoc:include type="modules" name="main-menu" />    -->


 <div class="topnav">
    <ul>
        <li><a class="navbarmainmenu" href=""><jdoc:include type="modules" name="MainMenu_Navigation-bar" /></a></li>
        <li><a class="navbarmainmenusearch2" href=""><jdoc:include type="modules" name="Search_for_sait" /></a>

    </ul>
</div>

<jdoc:include type="modules" name="top" /> 
<jdoc:include type="component" />

<div class="blog-div"><a  href="" class="blogclass"><jdoc:include type="modules" name="Blog_stati"/></a></div>

<div class="logindiv"><a class="loginblock" href=""><jdoc:include type="modules" name="LoginForm_coffe"/></a></div>

<jdoc:include type="modules"  name="bottom" /> 



<div  class="endline-div">  <jdoc:include type="modules"  name="BackGroundText" /> <p> </p> <title>backEnd</title> </div>




 </body>
</html>

