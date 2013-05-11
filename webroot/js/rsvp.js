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
    var plusoneName = this.document.getElementById('PlusoneName');
    var notAttendingchecked = this.document.getElementById('RsvpIsNotAttending');
    var disableAddPlusoneButton = this.document.getElementById('add_plusone_button');

    if (notAttendingchecked.checked !== true){
        plusoneName.disabled = false;
        disableAddPlusoneButton.disabled = false;
    }
    else {
        plusoneName.disabled = true;
        disableAddPlusoneButton.disabled = true;

        if (isCeremony.checked || isBanquet.checked){
            isCeremony.checked = false;
            isBanquet.checked = false;

        }
    }
}

/**
 *  Function that clears the not attending checkbox when either of the ceremony or
 *  the banquet checkbox is checked.
 * */
function clearNotAttending(){
    var isNotAttending = this.document.getElementById('RsvpIsNotAttending');
    var plusoneName = this.document.getElementById('PlusoneName');
    var disableAddPlusoneButton = this.document.getElementById('add_plusone_button');

    isNotAttending.checked = false;
    plusoneName.disabled = false;
    disableAddPlusoneButton.disabled = false;
}

/**
 *  Function that clears the not attending checkbox when either of the ceremony or
 *  the banquet checkbox is checked.
 * */
function addPlusone() {
    var ni = document.getElementById('extra_input');
    var numi = document.getElementById('theValue');
    var num = (document.getElementById('theValue').value -1)+ 2;
    var newdiv = document.createElement('input');
    numi.value = num;

    var divIdName = 'my'+num+'Div';

    newdiv.setAttribute('id',divIdName);

    ni.appendChild(newdiv);

}

/**
 *  Function that clears the not attending checkbox when either of the ceremony or
 *  the banquet checkbox is checked.
 * */
function removePlusone(divNum) {

    var d = document.getElementById('extra_input');
    var olddiv = document.getElementById(divNum);

    d.removeChild(olddiv);

}