<?php
session_start();
require_once('config.php');
require_once('functions.php');


?>

<!DOCTYPE html>

<html>

<head>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function(){
            $("audio").on("play", function() {
                $("audio").not(this).each(function(index, audio) {
                    audio.pause();
                });
            });
        });
    </script>

    <meta name="generator" content="Hugo 0.75.1" />
    <title>Soundtron.com - the worst music website of all time</title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no" />
    <meta name="theme-color" content="#000084" />
    <link rel="icon" href="./favicon.ico">
    <link rel="canonical" href="http://soundtron">
    
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"></button>
            <a class="brand" href="http://soundtron">soundtron.com</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    
                    
                        
                            <li>
                                <a href="http://soundtron">
                                    
                                    <span>Home</span>
                                </a>
                            </li> 
                </ul>
            </div>
        </div>
    </div>
</nav>

<div id="content" class="container">

<div class="row-fluid navmargin">
<div class="page-header">
        <p style="font-size: 36px; padding:10px; color: #000000">/</p>
    </div>
</div>



<div class="row-fluid">
    <div class="span9 bs-docs-sidebar">




<table>

<div class="nav nav-list bs-docs-sidenav">
        <div class="row justify-content-start">
            <div class = "col-sm-9">
                <h1>Title</h1>
                <h1>Artist</h1>
                <audio style="100%" controls>
                    <source src="./rock/test.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class = "col-sm-3">
            <div class = "votes">
                <img id="upvote" src="./img/up-arrow.png"> <img id="downvote" src="./img/down-arrow.png"><br>
                <p style = "color:#9b3581; text-align:left; padding: 5px;">200</p>
            </div>
            </div>
        </div>
</div>

<?php



/*
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo ("<div class=\"nav nav-list bs-docs-sidenav\"><div class=\"container\"><div class=\"row justify-content-start\"><div class=\"col-9\"><h1 style=\"color: black;\">" . $row["title"] . "</h1><h4>" . $row["username"] . "</h4><br> <audio controls controlsList=\"nodownload\">". "<source hidden src=\"./" . $row["category"] . "/" . $row["filename"] . "\" type=\"audio/mpeg\"></audio></div>");
    echo("<div class=\"col-3\"><img id=\"" . $row["id"] . "-upvote\" class=\"upvote\" src = \"./img/up-arrow.png\"></div></div></div></div><br>");

}} else {
  echo "0 results";
}

mysqli_close($link);
*/
?>

</table>
</div>

<div class="span3 bs-docs-sidebar">
    <p class="lead">  </p>
</div>

</div>
</div>

<link rel="stylesheet" href="./css/bootstrap-grid-min.css">

</body>

<link rel="stylesheet" href="./css/bootstrap.css">
<link rel="stylesheet" href="./css/bootstrap-responsive.css">
<link rel="stylesheet" href="./css/style.css">


<script src="./js/jquery.js"></script>
<script src="./js/bootstrap-386.js"></script>
<script src="./js/bootstrap-transition.js"></script>
<script src="./js/bootstrap-alert.js"></script>
<script src="./js/bootstrap-modal.js"></script>
<script src="./js/bootstrap-dropdown.js"></script>
<script src="./js/bootstrap-scrollspy.js"></script>
<script src="./js/bootstrap-tab.js"></script>
<script src="./js/bootstrap-tooltip.js"></script>
<script src="./js/bootstrap-popover.js"></script>
<script src="./js/bootstrap-button.js"></script>
<script src="./js/bootstrap-collapse.js"></script>
<script src="./js/bootstrap-carousel.js"></script>
<script src="./js/bootstrap-typeahead.js"></script>
<script src="./js/bootstrap-affix.js"></script>
<script src="./js/play-counter.js"></script>

<script>
    $(document).ready(function(){
        $('#upvote').click(function() {
            console.log("upvote!");
            $.post("test2.php", {var:'up added!'}, function(data,status){
                alert("Data: " + data + "\nStatus: " + status);
            });
        });
    });
    $(document).ready(function(){
        $('#downvote').click(function() {
            console.log("downvote!");
            $.post("test2.php", {var:'down added!'});
        });
    });
</script>

<script>
    _386 = { 
        fastLoad: true ,
        onePass: false , 
        speedFactor: 1 
    };

    
    function ThisYear() {
        document.getElementById('thisyear').innerHTML = new Date().getFullYear();
    };
</script>
</html>