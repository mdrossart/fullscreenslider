/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    function verifyVid(index, object){
        if(typeof $($("#links").children().get(index)).attr("type")!=="undefined"){
            $($(object).find('.video-content video')).get(0).play();
        }
    }
    $("#links").hide();
    $("#links").click(function(event){
        event = event || window.event;
        var target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event, container: '#blueimp-gallery-carousel', carousel: true, fullScreen: true, closeOnSlideClick: false, closeOnSwipeUpOrDown: false, disableScroll: true, onslide: verifyVid},
            links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    });
    $("#links").first().trigger("click");
});
