/**
 * Created with JetBrains WebStorm.
 * User: Jeffrey Ng
 * Date: 28/05/13
 * Time: 18:39
 * To change this template use File | Settings | File Templates.
 */
/**
 *  Function that clears the ceremony and banquet checkboxes when the checkbox for
 *  Not attending is checked
 * */
function notAttending(){
    var isCeremony = this.document.getElementById('RsvpIsCeremony');
    var isBanquet = this.document.getElementById('RsvpIsBanquet');

    var notAttendingchecked = this.document.getElementById('RsvpIsNotAttending');

    if (isCeremony.checked || isBanquet.checked){
        isCeremony.checked = false;
        isBanquet.checked = false;
    }
}

/**
 *  Function that clears the not attending checkbox when either of the ceremony or
 *  the banquet checkbox is checked.
 * */
function clearNotAttending(){
    var isNotAttending = this.document.getElementById('RsvpIsNotAttending');

    isNotAttending.checked = false;
}

$("#RsvpEditForm").submit(function() {
    if (($("#RsvpIsCeremony").is(':checked')) || ($("#RsvpIsBanquet").is(':checked')) || ($("#RsvpIsNotAttending").is(':checked')))
        return true;
    else {
        $(function () {
            $("#validate-modal").dialog({
                height:120,
                width:300,
                modal:true
            });
        });
        $("#dialog").dialog("open");
        $("button").removeClass("ui-state-focus ui-state-hover ui-state-active");
        return false;
    }
});
