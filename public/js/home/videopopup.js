/*
 * Author: Sławomir Netteria.NET https://netteria.net
 */
(function ($) {

    $.fn.VideoPopUp = function (options) {
        
        var defaults = {
            backgroundColor: "#000000",
            opener: "video",
            maxweight: "640",
            pausevideo: true,
            idvideo: "",
            idItem: 0
        };
        
        var patter = this.attr('id');
        var settings = $.extend({}, defaults, options);

        var video = document.getElementById(settings.idvideo);
        function stopVideo() {
            var tag = $('#' + patter + '').get(0).tagName;
            if (tag == 'video') {
                video.pause();
                video.currentTime = 0;
            }
        }
        
        $('#' + patter + '').css("display", "none");
        $('#' + patter + '').append('<div id="opct"></div>');
        $('#opct').css("background", settings.backgroundColor);
        $('#' + patter + '').css("z-index", "100001");
        $('#' + patter + '').css("position", "fixed")
        $('#' + patter + '').css("top", "0");
        $('#' + patter + '').css("bottom", "0");
        $('#' + patter + '').css("right", "0");
        $('#' + patter + '').css("left", "0");
        $('#' + patter + '').css("padding", "auto");
        $('#' + patter + '').css("text-align", "center");
        $('#' + patter + '').css("background", "none");
        $('#' + patter + '').css("vertical-align", "vertical-align");
        $("#videCont" + settings.idItem).css("z-index", "100002");
        $(".section-content").css("z-index", 'auto');
        $('#' + patter + '').append('<div id="closer_videopopup">&otimes;</div>');
        $("#" + settings.opener + "").on('click', function () {
            $('.item-youtube').each(function() {
                var id = $(this).attr('data-id-db');
                $('#vidBox' + id).removeClass('hidden');
            });
            $('#' + patter + "").show();
            $('#'+settings.idvideo+'').trigger('play');

        });
        $('#main').on('click', '#closer_videopopup', function() {
            if(settings.pausevideo==true){
                    $('#'+settings.idvideo+'')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
                }else{
                    stopVideo();
                }
            $('#' + patter + "").addClass('hidden');
        });
        return this.css({

        });
    };

}(jQuery));
