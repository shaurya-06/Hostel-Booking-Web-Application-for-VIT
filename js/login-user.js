function showpass(){
  if(document.getElementById('password-input').type == "password"){
    document.getElementById('password-input').type = "text";
    document.getElementById('show-pass').innerHTML = "Hide Password";
  }
  else{
    document.getElementById('password-input').type = "password";
    document.getElementById('show-pass').innerHTML = "Show Password";
  }
}
