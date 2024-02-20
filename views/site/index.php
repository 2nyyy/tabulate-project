<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Questionaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}


input.invalid {
  background-color: #ffdddd;
}


.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
  color: #fff;
  
}


.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}


.step.finish {
  background-color: #04AA6D;
}

h1 {
  margin-bottom: 20px;
}
</style>
<body>

<form id="regForm" action="/action_page.php">

  <div class="tab">
  <h1 style="font-weight: bold;">Register:</h1>
    <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
  </div>
  <div class="tab">Question 1: <br><br>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, et?</p><br><br>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">&nbsp;&nbsp;Option 1 <br><br>
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">&nbsp;&nbsp;Option 2<br><br>
        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">&nbsp;&nbsp;Option 3<br><br>
        <input type="radio" class="form-check-input" id="radio4" name="optradio" value="option4">&nbsp;&nbsp;Option 4
      </label>
    </div>
    <div id="error-message"></div>
  </div>
  <div class="tab">Question 2: <br><br>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, et?</p><br><br>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">&nbsp;&nbsp;Option 1 <br><br>
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">&nbsp;&nbsp;Option 2<br><br>
        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">&nbsp;&nbsp;Option 3<br><br>
        <input type="radio" class="form-check-input" id="radio4" name="optradio" value="option4">&nbsp;&nbsp;Option 4
      </label>
    </div> 
  </div>
  <div class="tab">Question 3: <br><br>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, et?</p><br><br>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">&nbsp;&nbsp;Option 1 <br><br>
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">&nbsp;&nbsp;Option 2<br><br>
        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">&nbsp;&nbsp;Option 3<br><br>
        <input type="radio" class="form-check-input" id="radio4" name="optradio" value="option4">&nbsp;&nbsp;Option 4
      </label>
    </div>
  </div>
  <div class="tab">Question 4: <br><br>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, et?</p><br><br>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">&nbsp;&nbsp;Option 1 <br><br>
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">&nbsp;&nbsp;Option 2<br><br>
        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">&nbsp;&nbsp;Option 3<br><br>
        <input type="radio" class="form-check-input" id="radio4" name="optradio" value="option4">&nbsp;&nbsp;Option 4
      </label>
    </div>
  </div>
  <div class="tab">Question 5: <br><br>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, et?</p><br><br>
    <div class="form-check-inline">
      <label class="form-check-label" for="radio">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">&nbsp;&nbsp;Option 1 <br><br>
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">&nbsp;&nbsp;Option 2<br><br>
        <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3">&nbsp;&nbsp;Option 3<br><br>
        <input type="radio" class="form-check-input" id="radio4" name="optradio" value="option4">&nbsp;&nbsp;Option 4
      </label>
    </div>
  </div>
  <div style="overflow:auto;"><br><br>
    <div style="text-align:center;">
      <button type="button" class="btn btn-md " id="prevBtn" onclick="nextPrev(-1)">Previous</button>&nbsp;&nbsp;
      <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>

  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
</div>
</form>








<script>

function nextPrev() {
  var radios = document.getElementsByName("optradio");
  var formValid = false;

  for (var i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      formValid = true;
      break;
    }
  }

  if (!formValid) {
    var errorMessage = document.getElementById("error-message");
    errorMessage.textContent = "Please select an option.";
  } else {
    errorMessage.textContent = ""; // Clear any previous error message
    nextPrev(1); // Proceed to the next step
  }
}

function nextPrev(n) {
  // Function to handle navigation between steps, you can implement it according to your requirements
}


var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>


</body>
</html>
