<?php
if(!isset($page_title)) {
  $page_title = '';
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title><?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo h($page_title); ?>">
    <style>
      html, body {
        margin: 0; padding: 0;
        height: 100%; width: 100%;
      }
      #menu {
        width: 100%;
        height: 3em;
        margin: 0;
        padding: 0;
        background-color: #E6AE35;
      }
      #menu ul {
        list-style: none;
      }
      #menu ul li {
        float: left;
        margin-top: 1em;
        margin-right: 1em;
        margin-bottom: 1em;
      }
      #menu ul li a {
        color: #FFFFFF;
        text-decoration: none;
      }
      #menu ul li a img{
        width : 2.5em;
        height : 1.5em;
      }
      .table tr th{
        color: #FFFFFF;  
        background-color: #900C3F;
      }
      #main-content {
        padding: 0 2em;
      }
     
      .search-box {
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 10px;
        width: 70em; 
        margin: .5em ,.5em ,0.5em , 0.5em;
        background-color:  #FFFFFF;
      }

    </style>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  </head>
  <body>
