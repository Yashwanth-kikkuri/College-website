<?php

  $text=$_POST["text"];
  $text=strtolower($text);
  
  if($text=="homepage"||$text=="home page")
  {
     header("Location: http://localhost/project/home3.html");exit;
  }
  if($text=="mess timetable" ||$text=="messtimetable")
  {
     header("Location: http://localhost/project/messpage.html");exit;
  }
 if($text=="news room" || $text=="newsroom")
  {
     header("Location: http://localhost/project/fbpage/news.html");exit;
  }
 if($text=="facebook page" || $text=="facebookpage")
  {
     header("Location: http://localhost/project/fbpage/fb2.html");exit;
  }
 if($text=="timetable")
  {
     header("Location: http://localhost/timetable.html");exit;
  }
   if($text=="music club")
  {
     header("Location: http://localhost/project/music.html");exit;
  }
   if($text=="sports club")
  {
     header("Location: http://localhost/project/sports.html");exit;
  }
   if($text=="nature club")
  {
     header("Location: http://localhost/project/nature.html");exit;
  }
   if($text=="coding club")
  {
     header("Location: http://localhost/project/code.html");exit;
  }
   if($text=="photography club")
  {
     header("Location: http://localhost/project/fbpage/timetable.html");exit;
  }
   if($text=="attendance")
  {
     header("Location: http://localhost/timetable.html");exit;
  }
  if($text=="cp" || $text=="c programming")
  {
     header("Location: http://localhost/project/cp.html");exit;
  }
  if($text=="dec")
  {
     header("Location: http://localhost/project/dec.html");exit;
  }
  if($text=="m1" || $text=="dm")
  {
     header("Location: http://localhost/project/dm.html");exit;
  }
  if($text=="itws1")
  {
     header("Location: http://localhost/project/it.html");exit;
  }
  if($text=="contacts" || $text=="contacts page")
  {
     header("Location: http://localhost/project/contactspage.html");exit;
  }
  if($text=="swathi restaurant" || $text=="swathi" || $text=="swathi cafe")
  {
     header("Location: http://localhost/project/cafechange.html");exit;
  }
  if($text=="gallery" || $text=="photos")
  {
     header("Location: http://localhost/timetable.html");exit;
  }
 if($text=="music club gallery" || $text=="music club photos")
  {
     header("Location: http://localhost/project/gallerym.html");exit;
  }
  if($text=="photography gallery" || $text=="photography photos")
  {
     header("Location: http://localhost/project/photography.html");exit;
  }
  if($text=="nature club gallery" || $text=="nature club photos")
  {
     header("Location: http://localhost/project/natureclubphotos.html");exit;
  }
  if($text=="log out" || $text=="logout")
  {
     header("Location: http://localhost/project/home1.html");exit;
  }
 
?>
 
<! doctype html>
<html>
<head>
<style>

html { 
  background: url(404err.jpg) no-repeat center fixed; 
  background-size: cover;
}

</style>
</head>

</html>
