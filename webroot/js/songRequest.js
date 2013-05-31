//http://youtu.be/dQw4w9WgXcQ

$("#SongAddForm").submit(function() {
    if ($("#SongArtist").val() === "Rick Astley" || $("#SongTitle").val() === "Never gonna give you up" )
    {
        /*$(function () {
            $("#validate-modal").dialog({
                height:120,
                width:300,
                modal:true
            });
        });
        $("#dialog").dialog("open");
        $("button").removeClass("ui-state-focus ui-state-hover ui-state-active");
        return false;*/
        alert("ass");
        return false;
    }
    else
        return true;
});