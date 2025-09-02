<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="asset/css/style.css">
  </head>
  <body>
    <div>
      <form id="registrationForm">
        <h1>Registration Form</h1>

        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="Chiane">
        <small class="error-message"></small>

        <label for="middlename">Middle Name</label>
        <input type="text" id="middlename" name="middlename" placeholder="Tudtud">
        <small class="error-message"></small>

        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" placeholder="Borgonia">
        <small class="error-message"></small>

        <label for="suffix">Suffix</label>
        <select id="suffix" name="suffix">
          <option value="">Select</option>
          <option value="N/A">N/A</option>
          <option value="Jr.">Jr.</option>
          <option value="Sr.">Sr.</option>
          <option value="II">II</option>
          <option value="III">III</option>
        </select>
        <small class="error-message"></small>

        <label for="mobile">Mobile Number</label>
        <input type="tel" id="mobile" name="mobile" placeholder="09xx-xxx-xxxx">
        <small class="error-message"></small>

        <label for="section">Section</label>
        <input type="text" id="section" name="section" placeholder="e.g. 3A">
        <small class="error-message"></small>

        <label for="technology">Technology</label>
        <select id="technology" name="technology">
          <option value="">Choose</option>
          <option value="electrical">Electrical Engineering</option>
          <option value="computer">Computer Engineering</option>
          <option value="electronics">Electronics Engineering</option>
          <option value="mechanical">Mechanical Engineering</option>
        </select>
        <small class="error-message"></small>

        <label for="batch">Batch</label>
        <select id="batch" name="batch">
          <option value="">Choose</option>
          <option value="30">30</option>
          <option value="31">31</option>
          <option value="32">32</option>
          <option value="33">33</option>
          <option value="34">34</option>
          <option value="35">35</option>
          <option value="36">36</option>
        </select>
        <small class="error-message"></small>

        <label for="schoolid">School ID</label>
        <input type="tel" id="schoolid" name="schoolid" placeholder="xxxx-xx-xxx">
        <small class="error-message"></small>
      </form>

      <button id="customSubmit">Submit</button>
    </div>

    <script src="asset/js/script.js"></script>
  </body>
</html>
