// Checkboxes (P3) Script
function handleCheckboxChange(checkbox) {
    if (checkbox.id === "noDefects" && checkbox.checked) {
        // If "No Defects" checkbox is checked, uncheck all other checkboxes
        uncheckOtherCheckboxes();
        // Disable any other checkboxes
        disableOtherCheckboxes();
        // Clear and hide the "Other" textarea
        clearAndHideOtherTextbox();
    } else {
        // If any other checkbox is checked, enable all checkboxes
        enableAllCheckboxes();
    }
}

function handleNoDefectsChange() {
    var noDefectsCheckbox = document.getElementById("noDefects");
    var otherCheckbox = document.getElementById("otherTU");
    var otherTextboxContainer = document.getElementById("otherTextboxContainer");
    var otherDescriptionTextarea = document.getElementById("otherDescription");

    if (noDefectsCheckbox.checked) {
        // If "No Defects" checkbox is checked, uncheck all other checkboxes
        uncheckOtherCheckboxes();
        // Disable other checkboxes
        disableOtherCheckboxes();
        // Clear and hide the "Other" textarea
        clearAndHideOtherTextbox();
    } else {
        // If "No Defects" checkbox is unchecked, enable all checkboxes
        enableAllCheckboxes();
        // Show the "Other" textarea if the "Other" checkbox is checked
        if (otherCheckbox.checked) {
            otherTextboxContainer.style.display = 'block';
        }
    }
}

function uncheckOtherCheckboxes() {
    var checkboxes = document.querySelectorAll('.checkbox-containerP3 input[type="checkbox"]');
    checkboxes.forEach(function (checkbox) {
        if (checkbox.id !== "noDefects") {
            checkbox.checked = false;
        }
    });
}

function disableOtherCheckboxes() {
    var checkboxes = document.querySelectorAll('.checkbox-containerP3 input[type="checkbox"]');
    checkboxes.forEach(function (checkbox) {
        if (checkbox.id !== "noDefects") {
            checkbox.disabled = true;
        }
    });
}

function enableAllCheckboxes() {
    var checkboxes = document.querySelectorAll('.checkbox-containerP3 input[type="checkbox"]');
    checkboxes.forEach(function (checkbox) {
        checkbox.disabled = false;
    });
}

function toggleOtherTextbox() {
    var otherCheckbox = document.getElementById('otherTU');
    var otherTextboxContainer = document.getElementById('otherTextboxContainer');

    if (otherCheckbox.checked) {
        otherTextboxContainer.style.display = 'block';
    } else {
        otherTextboxContainer.style.display = 'none';
    }
}

function clearAndHideOtherTextbox() {
    var otherTextboxContainer = document.getElementById("otherTextboxContainer");
    var otherDescriptionTextarea = document.getElementById("otherDescription");

    // Clear the textarea
    otherDescriptionTextarea.value = "";
    // Hide the "Other" textarea
    otherTextboxContainer.style.display = 'none';
}