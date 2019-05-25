var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;

document.getElementById("date").innerHTML = "<strong>Date:</strong> " + today;

function eraseContent() {
    var radioBtn = document.getElementsByName("type_of_record");
    radioBtn[0].checked = "checked";
    var inputFields = document.getElementsByClassName("field");
    inputFields[0].value = "";
    inputFields[1].value = "";
    inputFields[2].value = "";
    inputFields[3].value = "";
    inputFields[4].value = "";
}

// after pressing close button of alert, 'msg=success' should be removed from url in order to handle margin
function handleMargin() {
    window.location.href = window.location.pathname;
}