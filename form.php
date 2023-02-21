<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  let x = document.forms["myForm"]["fname"]["lname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
</head>
<body>

<h2>JavaScript Validation</h2>

<form name="myForm" action="form.php" onsubmit="return validateForm()" method="post">
  Name: <input type="text" name="fname"> 
   lName: <input type="text" name="lname">
  <input type="submit" value="Submit">
</form>

</body>
</html>