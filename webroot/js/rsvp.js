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
    var parentDiv = document.getElementById('plusone_input');
    var numericalValue = document.getElementById('RsvpIncrementalValue');
    var incrementalValue = (document.getElementById('RsvpIncrementalValue').value -1)+ 2;

    var newTextInput = document.createElement('input');
    var newRemoveButton = document.createElement('input');
    numericalValue.value = incrementalValue;

    var inputTextName = 'data[Rsvp]['+incrementalValue+'][Name]';
    var buttonName = 'data[Rsvp]['+incrementalValue+'button][Name]';

    newTextInput.setAttribute('id',inputTextName);

    newRemoveButton.setAttribute('id',buttonName);
    newRemoveButton.setAttribute('type', 'button');
    newRemoveButton.setAttribute('onclick', 'removePlusone("'+buttonName+'","'+ inputTextName+'");');
    newRemoveButton.setAttribute('class', 'removeButton');

    parentDiv.appendChild(newRemoveButton);
    parentDiv.appendChild(newTextInput);
}

/**
 *  Function that clears the not attending checkbox when either of the ceremony or
 *  the banquet checkbox is checked.
 * */
function removePlusone(button, inputText) {

    var d = document.getElementById('plusone_input');
    var oldButton = document.getElementById(button);
    var oldInputText = document.getElementById(inputText);

    d.removeChild(oldButton);
    d.removeChild(oldInputText);

}