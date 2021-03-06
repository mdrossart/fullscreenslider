/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var gallery;
$(document).ready(function() {
    function relaunch(){
        gallery.play();
    }
    function verifyVid(index, object){
        if(typeof $($("#links").children().get(index)).attr("type")!=="undefined"){
            gallery.pause();
            var video = $($(object).find('.video-content video')).get(0);
            video.addEventListener("ended", relaunch);
            video.addEventListener("pause", relaunch);
            video.addEventListener('error', function (e) {
                var date = new Date();
                var milliSecs = date.getMilliseconds();
                var curr_src = $(video[0]).attr('src');
                var curr_src_arr = curr_src.split("?");
                var new_src = curr_src_arr[0]+"?t="+milliSecs;

                $(video[0]).attr('src',new_src);
                $(video[0]).find('source').attr('src',new_src);
                video[0].load();
                //media[0].play(); /* Here we can not trigger play video/audio without user interaction. */
             }, false);
            video.play();
        }else{
            relaunch();
        }
    }
    $("#links").hide();
    $("#links").click(function(event){
        event = event || window.event;
        var target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event, container: '#blueimp-gallery-carousel', carousel: true, fullScreen: true, closeOnSlideClick: false, closeOnSwipeUpOrDown: false, disableScroll: true, onslide: verifyVid},
            links = this.getElementsByTagName('a');
        gallery = blueimp.Gallery(links, options);
    });
    $("#links").first().trigger("click");
});
