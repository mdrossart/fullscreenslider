/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    $("#links").click(function(event){
        event = event || window.event;
        var target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event, container: '#blueimp-gallery-carousel', carousel: true, fullScreen: true, closeOnSlideClick: false, closeOnSwipeUpOrDown: false, disableScroll: true},
            links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    });
});
