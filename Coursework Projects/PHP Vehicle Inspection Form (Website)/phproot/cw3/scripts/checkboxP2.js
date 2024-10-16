// Checkboxes (P2) Script
function handleCheckboxChange(checkbox) {
    if (checkbox.id === "noDefects" && checkbox.checked) {
        // If "No Defects" checkbox is checked, uncheck all other checkboxes
        uncheckOtherCheckboxes();
        // Disable any other checkboxes
        disableOtherCheckboxes();
    } else {
        // If any other checkbox is checked, enable all checkboxes
        enableAllCheckboxes();
    }
}

function handleNoDefectsChange() {
    var noDefectsCheckbox = document.getElementById("noDefects");

    if (noDefectsCheckbox.checked) {
        // If "No Defects" checkbox is checked, uncheck all other checkboxes
        uncheckOtherCheckboxes();
        // Disable other checkboxes
        disableOtherCheckboxes();
    } else {
        // If "No Defects" checkbox is unchecked, enable all checkboxes
        enableAllCheckboxes();
    }
}

function uncheckOtherCheckboxes() {
    var checkboxes = document.querySelectorAll('.checkbox-containerP2 input[type="checkbox"]');
    checkboxes.forEach(function (checkbox) {
        if (checkbox.id !== "noDefects") {
            checkbox.checked = false;
        }
    });
}

function disableOtherCheckboxes() {
    var checkboxes = document.querySelectorAll('.checkbox-containerP2 input[type="checkbox"]');
    checkboxes.forEach(function (checkbox) {
        if (checkbox.id !== "noDefects") {
            checkbox.disabled = true;
        }
    });
}

function enableAllCheckboxes() {
    var checkboxes = document.querySelectorAll('.checkbox-containerP2 input[type="checkbox"]');
    checkboxes.forEach(function (checkbox) {
        checkbox.disabled = false;
    });
}