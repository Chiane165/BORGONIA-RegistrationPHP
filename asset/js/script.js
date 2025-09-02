document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('registrationForm');
  const submitBtn = document.getElementById('customSubmit');

  submitBtn.addEventListener('click', function (e) {
    e.preventDefault(); // stop normal form submit
    let isValid = true;

    // Clear old errors
    const errorMessages = form.querySelectorAll('.error-message');
    errorMessages.forEach(el => el.textContent = '');

    function showError(id, message) {
      const input = document.getElementById(id);
      const errorEl = input.nextElementSibling;
      errorEl.textContent = message;
      isValid = false;
    }

    // Patterns
    const lettersOnly = /^[A-Za-z\s]+$/;
    const mobilePattern = /^09\d{9}$/;
    const schoolIdPattern = /^\d{4}-\d{2}-\d{3}$/;
    const sectionPattern = /^\d[A-Za-z]$/;

    // Values
    const firstname = document.getElementById('firstname').value.trim();
    const middlename = document.getElementById('middlename').value.trim();
    const familyname = document.getElementById('lastname').value.trim(); // your PHP expects "familyname"
    const suffix = document.getElementById('suffix').value;
    const contactNum = document.getElementById('mobile').value.trim();   // your PHP expects "contactNum"
    const section = document.getElementById('section').value.trim();
    const technology = document.getElementById('technology').value;
    const batch = document.getElementById('batch').value;
    const schoolId = document.getElementById('schoolid').value.trim();  // your PHP expects "schoolId"

    // Validation
    if (!firstname) {
      showError('firstname', 'First name is required.');
    } else if (!lettersOnly.test(firstname)) {
      showError('firstname', 'Only letters allowed.');
    }

    if (middlename && !lettersOnly.test(middlename)) {
      showError('middlename', 'Only letters allowed.');
    }

    if (!familyname) {
      showError('lastname', 'Family name is required.');
    } else if (!lettersOnly.test(familyname)) {
      showError('lastname', 'Only letters allowed.');
    }

    if (!suffix) {
      showError('suffix', 'Please select a suffix.');
    }

    if (!contactNum) {
      showError('mobile', 'Mobile number is required.');
    } else if (!mobilePattern.test(contactNum)) {
      showError('mobile', 'Must start with 09 and have 11 digits.');
    }

    if (!section) {
      showError('section', 'Section is required.');
    } else if (!sectionPattern.test(section)) {
      showError('section', 'Format must be like 3A.');
    }

    if (!technology) {
      showError('technology', 'Select a technology.');
    }

    if (!batch) {
      showError('batch', 'Select a batch.');
    }

    if (!schoolId) {
      showError('schoolid', 'School ID is required.');
    } else if (!schoolIdPattern.test(schoolId)) {
      showError('schoolid', 'Format must be xxxx-xx-xxx.');
    }

    // ✅ Redirect only if valid
    if (isValid) {
      const query = new URLSearchParams({
        firstname, middlename, familyname, suffix,
        contactNum, section, technology, batch, schoolId
      }).toString();

      window.location.href = "details.php?" + query;
    }
  });
});
