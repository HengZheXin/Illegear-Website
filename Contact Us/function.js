function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  let y = document.forms["myForm"]["fphone"].value;
  let z = document.forms["myForm"]["fmail"].value;
  let m = document.forms["myForm"]["fmsg"].value;

  if (x == "") {
    alert("Name must be filled out!");
    return false;
  }
  else if(y==""){
    alert("Phone number must be filled out!");
    return false;
  }
  else if(z==""){
    alert("Mail must be filled out!");
    return false;
  }
  else if(m==""){
    alert("You must write something!");
    return false;
  }
}
