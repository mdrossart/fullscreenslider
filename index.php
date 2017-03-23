<!DOCTYPE html>
<!--
Authors : Drossart Maxime, Goossens Cédric
Project start ->, chrome.exe –kiosk http:// [enter URL here]
-->
<?php
function scan_dir($dir) {
    $ignored = array('.', '..', '.svn', '.htaccess');

    $_files = array();    
    foreach (scandir($dir) as $file) {
        if (in_array($file, $ignored)) continue;
        $_files[$file] = filemtime($dir . '/' . $file);
    }

    arsort($_files);
    $_files = array_keys($_files);

    return ($_files) ? $_files : false;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GameJam Slider</title>
        <link rel="stylesheet" href="assets/css/blueimp-gallery.min.css">
    </head>
    <body>
        <div id="links">
        <?php
        $files = scan_dir ( getcwd () . "/datas");
        $i=1;
        foreach($files as $file){
            $infos = explode(".", $file);
            if(isset($infos[0]) && isset($infos[1])){
                if(!empty($infos[0]) && !empty($infos[1])){
                    $name = $infos[0];
                    $extension = strtolower($infos[1]);
                    if(is_string($extension) && strlen($extension)>=3){
                        if($extension=="jpg" || $extension=="jpeg" || $extension=="png" || $extension=="gif"){
                            ?>
                            <a href="datas/<?php echo $file; ?>" title="<?php echo $name; ?>">
                                <img src="images/thumbnails/<?php echo $file; ?>" alt="<?php echo $name; ?>">
                            </a><br />
                            <?php
                        }
                        elseif($extension=="ogg" || $extension=="mp4" || $extension=="webm"){
                            ?>
                            <a href="datas/<?php echo $file; ?>" title="Video <?php echo $i; ?>" type="video/<?php echo $extension; ?>">
                                Video  <?php echo $i; ?>
                            </a><br />
                            <?php
                            $i++;
                        }
                    }
                }
            }
        }
        ?>
        </div>
            <!--<a href="datas/donjon-porteursdechaussettes.mp3" title="Video 1" type="audio/mpeg">
                MP3 1
            </a>-->
        
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
