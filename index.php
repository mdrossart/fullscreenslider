<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>GameJam Slider</title>
        <link rel="stylesheet" href="assets/css/blueimp-gallery.min.css">
    </head>
    <body>
        <?php
        // Project start ->, chrome.exe –kiosk http:// [enter URL here]
        // Create with php the "links" div as below
        ?>
        <div id="links">
            <a href="datas/banana.jpg" title="Banana">
                <img src="images/thumbnails/banana.jpg" alt="Banana">
            </a>
            <a href="datas/apple.jpg" title="Apple">
                <img src="images/thumbnails/apple.jpg" alt="Apple">
            </a>
            <a href="datas/orange.jpg" title="Orange">
                <img src="images/thumbnails/orange.jpg" alt="Orange">
            </a>
        </div>
        <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="assets/js/blueimp-gallery.min.js"></script>
        <script src="assets/js/blueimp-gallery-fullscreen.js"></script>
        <script src="assets/js/blueimp-gallery-indicator.js"></script>
        <script src="assets/js/blueimp-gallery-video.js"></script>
        <script src="assets/js/own.js"></script>
    </body>
</html>
