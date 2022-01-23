$(document).ready(function() {

    $('.item-youtube').each(function() {
        var id = $(this).attr('data-id-db');
        $('#vidBox' + id).VideoPopUp({
            backgroundColor: "#17212a",
            opener: 'youtube' + id,
            maxweight: "640",
            idvideo: "example" + id,
            pausevideo: true
        });
    });

    
});