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
function addPlusone(incrementalValue) {

    var parentDiv = document.getElementById('plusone_input');

    var newTextInput = document.createElement('input');
    var newRemoveButton = document.createElement('input');

    var inputTextName = 'data[Plusone]['+incrementalValue+'][Name]';
    var buttonName = 'data[Plusone]['+incrementalValue+'button][Name]';
    var currentInputText = document.getElementById('PlusoneName');

    newTextInput.setAttribute('id',inputTextName);
    newTextInput.setAttribute('type','text');
    newTextInput.setAttribute('name',inputTextName);
    newTextInput.setAttribute('value',currentInputText.value);

    newRemoveButton.setAttribute('id',buttonName);
    newRemoveButton.setAttribute('type', 'button');
    newRemoveButton.setAttribute('onclick', 'removePlusone("'+buttonName+'","'+ inputTextName+'");');
    newRemoveButton.setAttribute('class', 'removeButton');
    newRemoveButton.setAttribute('title', 'Delete');

    var hiddenGuestId = document.createElement('input');
    hiddenGuestId.setAttribute('type','hidden');
    hiddenGuestId.setAttribute('value', document.getElementById('PlusoneGuest_id').value);
    hiddenGuestId.setAttribute('name','data[Plusone]['+ incrementalValue +'][Guest_id]');
    parentDiv.appendChild(hiddenGuestId);
    parentDiv.appendChild(newRemoveButton);
    parentDiv.appendChild(newTextInput);
    currentInputText.value = '';
}

var value = 1;

/**
 *  Function that clears the not attending checkbox when either of the ceremony or
 *  the banquet checkbox is checked.
 * */
function removePlusone(button, inputText) {
    value--;
    var d = document.getElementById('plusone_input');
    var oldButton = document.getElementById(button);
    var oldInputText = document.getElementById(inputText);

    d.removeChild(oldButton);
    d.removeChild(oldInputText);
}

function bindEvent(element, type, handler) {
    if(element.addEventListener) {
        element.addEventListener(type, handler, false);
    } else {
        element.attachEvent('on'+type, handler);
    }
}

bindEvent(document.getElementById('add_plusone_button'), 'click', function() {
    if (value < 5 )
        addPlusone(value++);
    else {
        $(function () {
            $("#dialog-modal").dialog({
                height:140,
                width:300,
                modal:true
            });
        });
        $("#add_plusone_button").click(function () {
            $("#dialog").dialog("open");
            $("button").removeClass("ui-state-focus ui-state-hover");

        });
    }
});

$("#RsvpAddForm").submit(function() {
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
