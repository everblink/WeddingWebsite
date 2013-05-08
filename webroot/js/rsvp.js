/**
 * Created with JetBrains WebStorm.
 * User: Jeffrey Ng
 * Date: 08/05/13
 * Time: 17:11
 * To change this template use File | Settings | File Templates.
 */

/**
*  Function that clears the ceremony and banquet checkboxes when the checkbox for
*  Not attending is checked
* */
function notAttending(){
    var isCeremony = this.document.getElementById('RsvpIsCeremony');
    var isBanquet = this.document.getElementById('RsvpIsBanquet');

    if (isCeremony.checked || isBanquet.checked){
        isCeremony.checked = false;
        isBanquet.checked = false;
    }
};

/**
 *  Function that clears the not attending checkbox when either of the ceremony or
 *  the banquet checkbox is checked.
 * */
function clearNotAttending(){
    var isNotAttending = this.document.getElementById('RsvpIsNotAttending');

    isNotAttending.checked = false;
};