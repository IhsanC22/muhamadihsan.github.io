// ANIMATION UNTUK MENU LOGIN
const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (()=>{
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
});
signupLink.onclick = (()=>{
  signupBtn.click();
  return false;
});

// cegah salah konfirmasi password
function confirmform(){
  const password = document.getElementById('password').value;
  const confirm_password = document.getElementById('ulangi').value;
  const warning = document.getElementById('warning');
  if (password !== confirm_password) {
    warning.textContent = 'Password tidak cocok';
    return false;
  }
  else {
    warning.textContent = '';
    return true;
  }
}